<html>

<div class="offers-container">
  <div class="offer-one-container">
    <div class="offer-one">
      <div class="circle">
        <span>£90</span>
      </div>
      <div class="bottom">
        <h1>Title</h1>
        <p>Description</p>
        <span>sub</span>
      </div>
    </div>
    <a href="#">Click me</a>
  </div>
  <div class="offer-two-container">
    <div class="offer-two">
      <div class="circle">
        <span>£150</span>
      </div>
      <div class="bottom">
        <h1>Title</h1>
        <p>Description</p>
        <span>sub</span>
      </div>
    </div>
    <a href="#">Click me</a>
  </div>
  <div class="offer-three-container">
    <div class="offer-three">
      <div class="circle">
        <span>£200</span>
      </div>
      <div class="bottom">
        <h1>Title</h1>
        <p>Description</p>
        <span>sub</span>
      </div>
    </div>
    <a href="#">Click me</a>
  </div>
</div>
<style>body {
  font-family: 'Quicksand', sans-serif;
}

div.offers-container {
  display: flex;
  justify-content: center;
}

div.offer-one, div.offer-two, div.offer-three {
  width: 250px;
  height: 300px;
  background-color: white;
  border: 2px solid #aec6cf;
  margin: 10px;
  margin-top: 200px;
  position: relative;
  background-image: url('images (2).jpg');
  background-repeat: no-repeat;
  transition: all 600ms ease-in-out;
  transform: translateY(0px);
}

div.animate {
  transform: translateY(-30px);
}

div.circle {
  width: 100px;
  height: 100px;
  border-radius: 100%;
  background-color: #DE5233;
  position: absolute;
  top: -50px;
  left: 125px;
  transform: translateX(-50%);
   box-shadow: 0px 0px 0px 3px white, 0px 0px 0px 5px #DE5233;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 800ms ease-in-out;
}

div.circle span {
  font-weight: 400;
  font-size: 30px;
  color: #fff;
}

div.offer-one-container, div.offer-two-container, div.offer-three-container {
  display: flex;
  flex-direction: column;
  align-items: center;
}

a {
  text-decoration: none;
  color: #fff;
  padding: 20px 30px;
  background-color: #DE5233;
  margin-top: 10px;
  margin-bottom: 10px;
  transition: all 200ms ease-in-out;
}

a:hover {
  box-shadow: 0px 0px 0px 3px #DE5233 inset, 0px 0px 0px 5px white inset;
}

div.bottom {
  width: inherit;
  height: 50%;
  background-color: #aec6cf;
  position: absolute;
  bottom: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

div.bottom h1 {
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 10px;
}

div.bottom p {
  font-weight: 400;
  font-size: 18px;
  margin-bottom: 10px;
}</style>

<script>
    $(document).ready(function() {
  $('a').hover(function(e) {
    e.preventDefault();
    $(this).prev().toggleClass('animate');
  });
});
</script>
<section class="product">
	<div class="product__photo">
		<div class="photo-container">
			<div class="photo-main">
				<div class="controls">
					<i class="material-icons">share</i>
					<i class="material-icons">favorite_border</i>
				</div>
				<img src="https://res.cloudinary.com/john-mantas/image/upload/v1537291846/codepen/delicious-apples/green-apple-with-slice.png" alt="green apple slice">
			</div>
			<div class="photo-album">
				<ul>
					<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537302064/codepen/delicious-apples/green-apple2.png" alt="green apple"></li>
					<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537303532/codepen/delicious-apples/half-apple.png" alt="half apple"></li>
					<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537303160/codepen/delicious-apples/green-apple-flipped.png" alt="green apple"></li>
					<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537303708/codepen/delicious-apples/apple-top.png" alt="apple top"></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="product__info">
		<div class="title">
			<h1>Delicious Apples</h1>
			<span>COD: 45999</span>
		</div>
		<div class="price">
			R$ <span>7.93</span>
		</div>
		<div class="variant">
			<h3>SELECT A COLOR</h3>
			<ul>
				<li><img src="" alt="green apple"></li>
				<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537302752/codepen/delicious-apples/yellow-apple.png" alt="yellow apple"></li>
				<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537302427/codepen/delicious-apples/orange-apple.png" alt="orange apple"></li>
				<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537302285/codepen/delicious-apples/red-apple.png" alt="red apple"></li>
			</ul>
		</div>
		<div class="description">
			<h3>BENEFITS</h3>
			<ul>
				<li>Apples are nutricious</li>
				<li>Apples may be good for weight loss</li>
				<li>Apples may be good for bone health</li>
				<li>They're linked to a lowest risk of diabetes</li>
			</ul>
		</div>
		<button class="buy--btn">ADD TO CART</button>
	</div>
</section>


<style>
    /* ----- Variables ----- */
$color-primary: #4c4c4c;
$color-secondary: #a6a6a6;
$color-highlight: #ff3f40;

/* ----- Global ----- */
* {
	box-sizing: border-box;
}

html,
body {
	height: 100%;
}

body {
	display: grid;
	grid-template-rows: 1fr;
	font-family: "Raleway", sans-serif;
	background-color: #01e37f;
}

h3 {
	font-size: 0.7em;
	letter-spacing: 1.2px;
	color: $color-secondary;
}

img {
			max-width: 100%;
			filter: drop-shadow(1px 1px 3px $color-secondary);
		}

/* ----- Product Section ----- */
.product {
	display: grid;
	grid-template-columns: 0.9fr 1fr;
	margin: auto;
	padding: 2.5em 0;
	min-width: 600px;
	background-color: white;
	border-radius: 5px;
}

/* ----- Photo Section ----- */
.product__photo {
	position: relative;
}

.photo-container {
	position: absolute;
	left: -2.5em;
	display: grid;
	grid-template-rows: 1fr;
	width: 100%;
	height: 100%;
	border-radius: 6px;
	box-shadow: 4px 4px 25px -2px rgba(0, 0, 0, 0.3);
}

.photo-main {
	border-radius: 6px 6px 0 0;
	background-color: #9be010;
	background: radial-gradient(#e5f89e, #96e001);

	.controls {
		display: flex;
		justify-content: space-between;
		padding: 0.8em;
		color: #fff;

		i {
			cursor: pointer;
		}
	}

	img {
		position: absolute;
		left: -3.5em;
		top: 2em;
		max-width: 110%;
		filter: saturate(150%) contrast(120%) hue-rotate(10deg)
			drop-shadow(1px 20px 10px rgba(0, 0, 0, 0.3));
	}
}

.photo-album {
	padding: 0.7em 1em;
	border-radius: 0 0 6px 6px;
	background-color: #fff;

	ul {
		display: flex;
		justify-content: space-around;
	}

	li {
		float: left;
		width: 55px;
		height: 55px;
		padding: 7px;
		border: 1px solid $color-secondary;
		border-radius: 3px;
	}
}

/* ----- Informations Section ----- */
.product__info {
	padding: 0.8em 0;
}

.title {
	h1 {
		margin-bottom: 0.1em;
		color: $color-primary;
		font-size: 1.5em;
		font-weight: 900;
	}

	span {
		font-size: 0.7em;
		color: $color-secondary;
	}
}

.price {
	margin: 1.5em 0;
	color: $color-highlight;
	font-size: 1.2em;

	span {
		padding-left: 0.15em;
		font-size: 2.9em;
	}
}

.variant {
	overflow: auto;

	h3 {
		margin-bottom: 1.1em;
	}

	li {
		float: left;
		width: 35px;
		height: 35px;
		padding: 3px;
		border: 1px solid transparent;
		border-radius: 3px;
		cursor: pointer;

		&:first-child,
		&:hover {
			border: 1px solid $color-secondary;
		}
	}

	li:not(:first-child) {
		margin-left: 0.1em;
	}
}

.description {
	clear: left;
	margin: 2em 0;

	h3 {
		margin-bottom: 1em;
	}

	ul {
		font-size: 0.8em;
		list-style: disc;
		margin-left: 1em;
	}

	li {
		text-indent: -0.6em;
		margin-bottom: 0.5em;
	}
}

.buy--btn {
	padding: 1.5em 3.1em;
	border: none;
	border-radius: 7px;
	font-size: 0.8em;
	font-weight: 700;
	letter-spacing: 1.3px;
	color: #fff;
	background-color: $color-highlight;
	box-shadow: 2px 2px 25px -7px $color-primary;
	cursor: pointer;

	&:active {
		transform: scale(0.97);
	}
}

/* ----- Footer Section ----- */
footer {
	padding: 1em;
	text-align: center;
	color: #fff;

	a {
		color: $color-primary;

		&:hover {
			color: $color-highlight;
		}
	}
}

</style>


</html>