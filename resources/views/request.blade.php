<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<body>
<div class="container" style="margin-left: inherit">

    <hr />
    <div class="row" >
        <div class="col-sm-3 col-md-2">
            <div class="btn-group">
            <h1 class="req">Request List</h1>
            </div>
        </div>
    </div>
    
    <hr />
    <div class="row">
        <div class="col-sm-9 col-md-10">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-inbox">
                </span> Request for Services</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <span class="glyphicon glyphicon-star-empty"></span><span class="name" style="min-width: 120px;
                                display: inline-block;">Place Holder</span> <span class="">Text</span>
                            <span class="text-muted" style="font-size: 11px;">-The Request which is put in</span>
                            </a><a href="#" class="list-group-item">
                                    <span class="glyphicon glyphicon-star-empty"></span><span class="name" style="min-width: 120px;
                                        display: inline-block;">PlaceHolder</span> <span class="">Text</span>
                                    <span class="text-muted" style="font-size: 11px;">-The Request which is put in </span> 
                                    </a><a href="#" class="list-group-item read">
                                            <span class="glyphicon glyphicon-star-empty"></span><span class="name" style="min-width: 120px;
                                                display: inline-block;">Placeholder</span> <span class="">Text</span>
                                            <span class="text-muted" style="font-size: 11px;">-The Request which is put in</span> 
                                             </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>	
<div class="col-md-12 offset-md-2">
<textarea rows="4" cols="70" name="description" placeholder="Admin Response." style="outline-width: 2px;outline-color: #1b1e21; border-width: 2px;margin-left:10%;
border-color: #1d2124;border-radius: 10px"></textarea>
</div>
<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4" style="margin:37px 0px 0px 360px">
        <button type="submit" class="btn btn-primary justify-content-center">Submit</button>
    </div>
</div>
<!--<div>
    <button class="modalbtn">COMPOSE</button>
       <div class ="modalbg" >
            <div class="modal">
                <h2>Compose</h2>
                <label for="email">Email:</label>
                <input type="email" name="email">
                <label for="text">message:</label>
                <input type="text" name="text">
                <button>Send</button>
                <span class="modalclose">X</span>
            </div>
       </div>
</div>
-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<style>
.req {
	margin: 1em 0 0.5em 0;
	font-weight: normal;
	position: relative;
	text-shadow: 0 -1px rgba(0,0,0,0.6);
	font-size: 20px;
	line-height: 30px;
	background: #355681;
	background: rgba(53,86,129, 0.8);
	border: 1px solid #fff;
	padding: 5px 15px;
	color: white;
	border-radius: 0 10px 0 10px;
	box-shadow: inset 0 0 5px rgba(53,86,129, 0.5);
	font-family: 'Muli', sans-serif;
}
/*
.modalbg{
    position:fixed;
    width: 100%;
    height:100vh;
    top:0;
    left:0;
    background-color:rgba(0,0,0,0.5);
    display:flex;
    justify-content:center;
    align-items:center;
    visibility:hidden;
    opacity:0;
    transition:visibility 0s opacity 0.5s;
}
.bg-active{
    visibility:visible;
    opacity:1;
}
.modal{
    background-color:white;
    width:30%;
    height:30%;
    display:flex;
    justify-content:space-around;
    align-items:center;
    flex-direction:column;
}
.modal button{
    padding: 10px 30px;
    background-color:#2980b9;
    color:white;
    border:none;
    cursor:pointer;
}
.modalclose{
    position:absolute;
    top: 10px;
    right: 10px;
    font-weight:bold;
    cursor:pointer;
}*/
</style>
<script>
   // var mbtn=document.querySelector(".modalbtn");
   // var mbg=document.querySelector(".modalbg");
   // var mclose=document.querySelector(".modalclose");

    //mbtn.addEventListener("click",function(){
      //  mbg.classList.add("compose.blade.php");
    //});
 //  mclose.addEventListener("click",function(){
   //     mbg.classList.remove("bg-active");
    //});
</script>
</body>