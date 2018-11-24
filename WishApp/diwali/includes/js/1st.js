'use strict';

var _slicedToArray = function () { function sliceIterator(arr, i) { var _arr = []; var _n = true; var _d = false; var _e = undefined; try { for (var _i = arr[Symbol.iterator](), _s; !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"]) _i["return"](); } finally { if (_d) throw _e; } } return _arr; } return function (arr, i) { if (Array.isArray(arr)) { return arr; } else if (Symbol.iterator in Object(arr)) { return sliceIterator(arr, i); } else { throw new TypeError("Invalid attempt to destructure non-iterable instance"); } }; }();

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

// CLASSES
var Shard = function () {
  function Shard(x, y, hue) {
    _classCallCheck(this, Shard);

    this.x = x;
    this.y = y;
    this.hue = hue;
    this.lightness = 50;
    this.size = 15 + Math.random() * 10;
    var angle = Math.random() * 2 * Math.PI;
    var blastSpeed = 1 + Math.random() * 6;
    this.xSpeed = Math.cos(angle) * blastSpeed;
    this.ySpeed = Math.sin(angle) * blastSpeed;
    this.target = getTarget();
    this.ttl = 100;
    this.timer = 0;
  }

  _createClass(Shard, [{
    key: 'draw',
    value: function draw() {
      ctx2.fillStyle = 'hsl(' + this.hue + ', 100%, ' + this.lightness + '%)';
      ctx2.beginPath();
      ctx2.arc(this.x, this.y, this.size, 0, 2 * Math.PI);
      ctx2.closePath();
      ctx2.fill();
    }
  }, {
    key: 'update',
    value: function update() {
      var _this = this;

      if (this.target) {
        var dx = this.target.x - this.x;
        var dy = this.target.y - this.y;
        var dist = Math.sqrt(dx * dx + dy * dy);
        var a = Math.atan2(dy, dx);
        var tx = Math.cos(a) * 5;
        var ty = Math.sin(a) * 5;
        this.size = lerp(this.size, 1.5, 0.05);

        if (dist < 5) {
          this.lightness = lerp(this.lightness, 100, 0.01);
          this.xSpeed = this.ySpeed = 0;
          this.x = lerp(this.x, this.target.x + fidelity / 2, 0.05);
          this.y = lerp(this.y, this.target.y + fidelity / 2, 0.05);
          this.timer += 1;
        } else if (dist < 10) {
          this.lightness = lerp(this.lightness, 100, 0.01);
          this.xSpeed = lerp(this.xSpeed, tx, 0.1);
          this.ySpeed = lerp(this.ySpeed, ty, 0.1);
          this.timer += 1;
        } else {
          this.xSpeed = lerp(this.xSpeed, tx, 0.02);
          this.ySpeed = lerp(this.ySpeed, ty, 0.02);
        }
      } else {
        this.ySpeed += 0.05;
        //this.xSpeed = lerp(this.xSpeed, 0, 0.1);
        this.size = lerp(this.size, 1, 0.05);

        if (this.y > c2.height) {
          shards.forEach(function (shard, idx) {
            if (shard === _this) {
              shards.splice(idx, 1);
            }
          });
        }
      }
      this.x = this.x + this.xSpeed;
      this.y = this.y + this.ySpeed;
    }
  }]);

  return Shard;
}();

var Rocket = function () {
  function Rocket() {
    _classCallCheck(this, Rocket);

    var quarterW = c2.width / 4;
    this.x = quarterW + Math.random() * (c2.width - quarterW);
    this.y = c2.height - 15;
    this.angle = Math.random() * Math.PI / 4 - Math.PI / 6;
    this.blastSpeed = 6 + Math.random() * 7;
    this.shardCount = 15 + Math.floor(Math.random() * 15);
    this.xSpeed = Math.sin(this.angle) * this.blastSpeed;
    this.ySpeed = -Math.cos(this.angle) * this.blastSpeed;
    this.hue = Math.floor(Math.random() * 360);
    this.trail = [];
  }

  _createClass(Rocket, [{
    key: 'draw',
    value: function draw() {
      ctx2.save();
      ctx2.translate(this.x, this.y);
      ctx2.rotate(Math.atan2(this.ySpeed, this.xSpeed) + Math.PI / 2);
      ctx2.fillStyle = 'hsl(' + this.hue + ', 100%, 50%)';
      ctx2.fillRect(0, 0, 5, 15);
      ctx2.restore();
    }
  }, {
    key: 'update',
    value: function update() {
      this.x = this.x + this.xSpeed;
      this.y = this.y + this.ySpeed;
      this.ySpeed += 0.1;
    }
  }, {
    key: 'explode',
    value: function explode() {
      for (var i = 0; i < 30; i++) {
        shards.push(new Shard(this.x, this.y, this.hue));
      }
    }
  }]);

  return Rocket;
}();

// INITIALIZATION


var _document$querySelect = document.querySelectorAll('canvas'),
    _document$querySelect2 = _slicedToArray(_document$querySelect, 3),
    c1 = _document$querySelect2[0],
    c2 = _document$querySelect2[1],
    c3 = _document$querySelect2[2];

var _map = [c1, c2, c3].map(function (c) {
  return c.getContext('2d');
}),
    _map2 = _slicedToArray(_map, 3),
    ctx1 = _map2[0],
    ctx2 = _map2[1],
    ctx3 = _map2[2];

var fontSize = 200;
var rockets = [];
var shards = [];
var targets = [];
var fidelity = 3;
var counter = 0;
c2.width = c3.width = window.innerWidth;
c2.height = c3.height = window.innerHeight;
ctx1.fillStyle = '#000';
var text = 'HAPPY DIWALI ';
var textWidth = 99999999;

while (textWidth > window.innerWidth) {
  ctx1.font = '900 ' + fontSize-- + 'px Arial';
  textWidth = ctx1.measureText(text).width;
}

c1.width = textWidth;
c1.height = fontSize * 1.5;
ctx1.font = '900 ' + fontSize + 'px Arial';
ctx1.fillText(text, 0, fontSize);
var imgData = ctx1.getImageData(0, 0, c1.width, c1.height);
for (var i = 0, max = imgData.data.length; i < max; i += 4) {
  var alpha = imgData.data[i + 3];
  var x = Math.floor(i / 4) % imgData.width;
  var y = Math.floor(i / 4 / imgData.width);

  if (alpha && x % fidelity === 0 && y % fidelity === 0) {
    targets.push({ x: x, y: y });
  }
}

ctx3.fillStyle = '#FFF';
ctx3.shadowColor = '#F90F12';
ctx3.shadowBlur = 25;

// ANIMATION LOOP
(function loop() {
  ctx2.fillStyle = "rgba(0, 0, 0, .1)";
  ctx2.fillRect(0, 0, c2.width, c2.height);
  //ctx2.clearRect(0, 0, c2.width, c2.height);
  counter += 1;

  if (counter % 15 === 0) {
    rockets.push(new Rocket());
  }
  rockets.forEach(function (r, i) {
    r.draw();
    r.update();
    if (r.ySpeed > 0) {
      r.explode();
      rockets.splice(i, 1);
    }
  });

  shards.forEach(function (s, i) {
    s.draw();
    s.update();

    if (s.timer >= s.ttl || s.lightness >= 99) {
      ctx3.fillRect(s.target.x, s.target.y, fidelity + 1, fidelity + 1);
      shards.splice(i, 1);
    }
  });

  requestAnimationFrame(loop);
})();

// HELPER FUNCTIONS
var lerp = function lerp(a, b, t) {
  return Math.abs(b - a) > 0.1 ? a + t * (b - a) : b;
};

function getTarget() {
  if (targets.length > 0) {
    var idx = Math.floor(Math.random() * targets.length);
    var _targets$idx = targets[idx],
        _x = _targets$idx.x,
        _y = _targets$idx.y;

    targets.splice(idx, 1);

    _x += c2.width / 2 - textWidth / 2;
    _y += c2.height / 2 - fontSize / 2;

    return { x: _x, y: _y };
  }
}