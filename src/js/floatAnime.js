


var floating = new TimelineMax();

floating
.to(`.hero_article-cta`, {duration: 1.3, y: -10, x: -10, rotation: 8, ease: "linear"})
.to(`.hero_article-cta`, {duration:1.3, y:0, x: 10, rotation: 15, ease: "linear"})
.to(`.hero_article-cta`, {duration:1.3, y:10, x: -10, rotation: 8, ease: "linear"})
.to(`.hero_article-cta`, {duration:1.3, y:0, x: 10, rotation: 0, ease: "linear"})
.to(`.hero_article-cta`, {duration: 1.3, y: -10, x: -10, rotation: -8, ease: "linear"})
.to(`.hero_article-cta`, {duration:1.3, y:0, x: 10, rotation: -15, ease: "linear"})
.to(`.hero_article-cta`, {duration:1.3, y:10, x: -10, rotation: -8, ease: "linear"})
.to(`.hero_article-cta`, {duration:1.3, y:0, x: 10, rotation: 0, ease: "linear"})

floating.repeat(-1)

