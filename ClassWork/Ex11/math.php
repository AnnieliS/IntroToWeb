



<h1> Choose Subject</h1>

<?php    
if(isset($_GET['SubmitButton'])){ //check if form was submitted
  $input = $_GET['MSubject']; //get input text

}    
?>


<form method="GET">

<select class="form-control form-control-lg" name="MSubject">
  <option value = "1">Math</option>
  <option value = "2">Trigo</option>
  <option value = "3">Geomatry</option>
</select>

<button type="submit" class="btn btn-secondary" name='SubmitButton'>Submit</button>

</form>

<?php



if($input == 1){
  echo "<h1>Math</h1>";
  }
  elseif($input == 2){
  echo "<h1>trigo</h1>";
  }

  elseif ($input ==3 ){
  echo "<h1>geo</h1>";
  }

?>