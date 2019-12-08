<?php require 'navbar.php';?>
<style type="text/css">
	.text-writeforus{
		font-family: Playfair Display;
		font-style: normal;
		font-weight: normal;
		font-size: 36px;
		line-height: 48px;
		color: #000000;
	}
	.form-control{
		border: solid #000000;
		border-radius: 2%; 
		box-sizing: border-box;
		padding: 3% 1.5%;
		line-height: 10%;
	}
	.form-control:focus{
		border: solid #000000;
		border-radius: 2%; 
		box-sizing: border-box;
	}
	.form-textarea{
		line-height: 120%;
	}
	.form-text{
		font-family: Playfair Display;
		font-style: normal;
		font-weight: bold;
		font-size: 200%;
		line-height: 120%;
		text-align: center;
		color: #000000;
		margin-bottom: 5%;
	}
	.button-submit{
      padding: 2% 2%;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 100%;
      -webkit-transition-duration: 0.4s; /* Safari */
      transition-duration: 0.4s;
      cursor: pointer;
      background-color: black; 
      color: #F6EB42;
      border: solid black;
      border-radius: 2%;
      font-weight: 600;
    }
    .button-submit:hover {
      background-color: #F6EB42;
      color: black;
  	}
    .button-toggle{
      padding: 0% 2%;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 100%;
      -webkit-transition-duration: 0.4s; /* Safari */
      transition-duration: 0.4s;
      cursor: pointer;
      background-color: black; 
      color: #F6EB42;
      border: solid black;
      border-radius: 2%;
      font-weight: 600;
    }
    .button-toggle:hover {
      background-color: #F6EB42;
      color: black;
  	}
</style>
<img src="articleimage.png" style="max-width:100%;min-width: 100%;"> <!-- write for us svg-->
<div class="row col-11 mx-auto" style="padding:2% 5%">
	<p class="text-writeforus">You can use the hashtag #<strong>SomaiyaVoices</strong> on all social media platforms to point out at something, be it some event happening in college, or a photo that you clicked on campus or some gossip that's going around. We will make sure you're heard! </p>
	<p class="text-writeforus">Send in your literature, drawings, jokes, puns and we will give you the exposure you always needed.</p>
</div>

	  
<img class="col-12 p-0" src="../css/Images/page tear top.png" alt="">
<div class="row p-5" style="background-color: #F6EB42">
	<div class="col-6 mx-auto">
		<p class="form-text">Send in your entries!</p>
		<form class="row">
			<div class="form-group col-12">
			    <input type="text" class="form-control" id="name" placeholder="Enter Your Name">
			</div>
			<div class="form-group col-12">
				<input type="text" class="form-control" id="college" placeholder="Enter Your College">
			</div>
			<div class="form-group col-12">
				<textarea type="text" class="form-textarea form-control" id="thought" placeholder="Type in your thoughts here!" rows=5></textarea>
			</div>
			<div class="mb-3 input-group col-12">
				<input type="text" class="form-control" aria-label="Text input with dropdown button" id="category" placeholder="Category">
				<button class="button-toggle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
				<div class="dropdown-menu dropdown-bottom">
			  		<a class="dropdown-item" href="#">Action</a>
			  		<a class="dropdown-item" href="#">Another action</a>
			  		<a class="dropdown-item" href="#">Something else here</a>
			  		<div role="separator" class="dropdown-divider"></div>
		  			<a class="dropdown-item" href="#">Separated link</a>
				</div>
			</div>
			<div class="col-4"></div>
			<button class="col-4 button-submit btn btn-block">Submit</button>
		</form>
	</div>
</div>
<img class="col-12 p-0" src="../css/Images/page tear bottom.png" alt=""><br><br>
<?php require 'footer.php';?>