<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1 id="apa">Hello, world!</h1>
<div class="row">
	<div class="card">
   		<div class="card-body">
   			<input type="number" id="angka1" class="form-control" >
    	</div>
		   <button id="tampil" class="btn btn-primary" disabled="">hasil</button>
		   <button id="final" type="submit" class="btn btn-success mt-3" >selesai</button>
		   <button id="btn" class="btn btn-primary mt-3">kirim</button>
	</div>
</div>
<div class="row">
	<div class="card-body">
		<input type="number" name="" id="angka3">
		<input type="number" name="" id="angka4">
	</div>
	<div>
		<button id="tambah" class="btn btn-primary">+</button>
		<button id="kurang" class="btn btn-primary">-</button>
		<button id="kali" class="btn btn-primary">*</button>
		<button id="bagi" class="btn btn-primary">/</button>
		<button id="hitung" disabled class="btn btn-danger">hasil</button>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>




<script> 


$('#tambah').on('click', function (){
	let angka3= document.getElementById('angka3').value;
	let nilai3= parseInt(angka3)
	let angka4= document.getElementById('angka4').value;
	let nilai4= parseInt(angka4)
	let hasil = parseInt (angka3) + parseInt (angka4)
 $('#tambah').addClass('disabled').html('hasil')
 $('#hitung').html(hasil)
})

$('#kurang').on('click', function (){
	let angka3= document.getElementById('angka3').value;
	let nilai3= parseInt(angka3)
	let angka4= document.getElementById('angka4').value;
	let nilai4= parseInt(angka4)
	let hasil = parseInt (angka3) - parseInt (angka4)
 $('#kurang').addClass('disabled').html('hasil')
 $('#hitung').html(hasil)
})

$('#kali').on('click', function (){
	let angka3= document.getElementById('angka3').value;
	let nilai3= parseInt(angka3)
	let angka4= document.getElementById('angka4').value;
	let nilai4= parseInt(angka4)
	let hasil = angka3 * angka4
 $('#kali').addClass('disabled').html('hasil')
 $('#hitung').html(hasil)
})

$('#bagi').on('click', function (){
	let angka3= document.getElementById('angka3').value;
	let nilai3= parseInt(angka3)
	let angka4= document.getElementById('angka4').value;
	let nilai4= parseInt(angka4)
	let hasil = angka3 / angka4
 $('#bagi').addClass('disabled').html('hasil')
 $('#hitung').html(hasil)
})





</script>





<script>
    	
  $('#btn').on('click', function(){
    	alert('klm anjing')
   $('#btn').addClass("disabled").html('loading....')
   })
</script>



<script>
	$('#apa').on('click', function(){
		$('#apa').addClass('text-danger')
		let angka1 = document.getElementById('angka1').value;
		let final = parseInt(angka1);
		$('#final').addClass('disabled').html('sudah di inputkan');
		$('#tampil').html(final);
	})
</script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>