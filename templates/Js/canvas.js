window.onload = function(){
    var canvas = document.getElementById("myCanvas");
    canvas.width = document.documentElement.clientWidth;
    canvas.height = document.documentElement.clientHeight;
    var ctx = canvas.getContext("2d");
    //创建小球的构造函数
    function Ball() {
        this.x = randomNum(3, canvas.width - 3);
        this.y = randomNum(3, canvas.height - 3);
        this.r = randomNum(1, 2);
        this.color = randomColor();
        this.speedX = randomNum(-3, 3) * 0.2;
        this.speedY = randomNum(-3, 3) * 0.2;
    }
    Ball.prototype = {
//绘制小球
        draw: function () {
            ctx.beginPath();
            ctx.globalAlpha = 1;
            ctx.fillStyle = this.color;
            ctx.arc(this.x, this.y, this.r, 0, Math.PI * 2);
            ctx.fill();
        },
//小球移动
        move: function () {
            this.x += this.speedX;
            this.y += this.speedY;
//为了合理性,设置极限值
            if (this.x <= 3 || this.x > canvas.width - 3) {
                this.speedX *= -1;
            }
            if (this.y <= 3 || this.y >= canvas.height - 3) {
                this.speedY *= -1;
            }
        }
    };
    //存储所有的小球
    var balls = [];
    //创建200个小球
    for (var i = 0; i < 150; i++) {
        var ball = new Ball();
        balls.push(ball);
    }
    main();

    function main() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
//鼠标移动绘制线
        mouseLine();
//小球与小球之间自动画线
        drawLine();
//使用关键帧动画，不断的绘制和清除
        window.requestAnimationFrame(main);
    }
    //添加鼠标移动事件
    //记录鼠标移动时的mouseX坐标
    var mouseX;
    var mouseY;
    canvas.onmousemove = function (e) {
        var ev = event || e;
        mouseX = ev.offsetX;
        mouseY = ev.offsetY;
    };
    //判断是否划线

    function drawLine() {
        for (var i = 0; i < balls.length; i++) {
            balls[i].draw();
            balls[i].move();
            for (var j = 0; j < balls.length; j++) {
                if (i != j) {
                    if (Math.sqrt(Math.pow((balls[i].x - balls[j].x), 2) + Math.pow((balls[i].y - balls[j].y), 2)) < 80) {
                        ctx.beginPath();
                        ctx.moveTo(balls[i].x, balls[i].y);
                        ctx.lineTo(balls[j].x, balls[j].y);
                        ctx.strokeStyle = "#B4EEB4";
                        ctx.globalAlpha = 0.4;
                        ctx.stroke();
                    }
                }
            }
        }
    }
    //使用鼠标移动划线

    function mouseLine() {
        for (var i = 0; i < balls.length; i++) {
            if (Math.sqrt(Math.pow((balls[i].x - mouseX), 2) + Math.pow((balls[i].y - mouseY), 2)) < 80) {
                ctx.beginPath();
                ctx.moveTo(balls[i].x, balls[i].y);
                ctx.lineTo(mouseX, mouseY);
                ctx.strokeStyle = "#B4EEB4";
                ctx.globalAlpha = 1;
                ctx.stroke();
            }
        }
    }
    //随机函数

    function randomNum(m, n) {
        return Math.floor(Math.random() * (n - m + 1) + m);
    }
    //随机颜色

    function randomColor() {
        return "rgb(" + randomNum(0, 255) + "," + randomNum(0, 255) + "," + randomNum(0, 255) + ")";
    }
};

