<div class="hmargin">
<div class="wf">
<form method="post" action="<?=$html->uri('action=send');?>">

<div>
  <label for="fullname">Uw naam:</label>
  <div>
    <input tabindex="1" type="text" name="fullname" value=""  id="fullname" autofocus>
  </div>
</div>

<div>
  <label for="fullname">Sexe</label>
  <div>
        <input type="radio" value="Home">homme
        <input type="radio" value="Femme">femme
  </div>
</div>

    
    
<div>
  <fieldset>
  
    <legend id="title5" class="desc">
      Select a Choice
    </legend>
    
    <div>
      <input id="radioDefault_5" name="Field5" type="hidden" value="">
      <div>
              <input id="Field5_0" name="Field5" type="radio" value="First Choice" tabindex="5" checked="checked">
              <label class="choice" for="Field5_0">First Choice</label>
      </div>
      <div>
              <input id="Field5_1" name="Field5" type="radio" value="Second Choice" tabindex="6">
              <label class="choice" for="Field5_1">Second Choice</label>
      </div>
      <div>
              <input id="Field5_2" name="Field5" type="radio" value="Third Choice" tabindex="7">
              <label class="choice" for="Field5_2">Third Choice</label>
      </div>
    </div>
  </fieldset>
</div>

<div>
  <fieldset>
    <legend id="title6" class="desc">
      Check All That Apply
    </legend>
    <div>
    <div>
      <input id="Field6" name="Field6" type="checkbox" value="First Choice" tabindex="8">
      <label class="choice" for="Field6">First Choice</label>
    </div>
    <div>
      <input id="Field7" name="Field7" type="checkbox" value="Second Choice" tabindex="9">
      <label class="choice" for="Field7">Second Choice</label>
    </div>
    <div>
      <input id="Field8" name="Field8" type="checkbox" value="Third Choice" tabindex="10">
      <label class="choice" for="Field8">Third Choice</label>
    </span>
    </div>
  </fieldset>
</div>

<div>
  <label class="desc" id="title106" for="Field106">
      Select a Choice
  </label>
  <div>
  <select id="Field106" name="Field106" class="field select medium" tabindex="11"> 
    <option value="First Choice">First Choice</option>
    <option value="Second Choice">Second Choice</option>
    <option value="Third Choice">Third Choice</option>
  </select>
  </div>
</div>    
    
    <input type="submit">
</form>

<h1>genealogy</h1>
<P>Hariot</P>
<?php
$translations = array();
$translations[] = array(' ','masculine','feminine');
$translations[] = array(' ','Homme','Femme');
$translations[] = array(' ','epous','epouse');
$translations[] = array(' ','frere','soeure');
$translations[] = array(' ','pere (papa)','mere (maman)');
$translations[] = array(' ','fils','file');
$translations[] = array(' ','frere','soeure');
$translations[] = array(' ','parent','enfant');
// echo $html->table($translations);

$translations = array();
$translations[] = array(' ','mannelijk','vrouwelijk');
$translations[] = array(' ','man','vrouw');
$translations[] = array(' ','echtgenoot','echtgenote');
$translations[] = array(' ','broer','zus');
$translations[] = array(' ','vader (pa)','moeder (ma)');
$translations[] = array(' ','zoon','dochter');
$translations[] = array(' ','broer','zus');
$translations[] = array(' ','ouder','kind');
// echo $html->table($translations);

$translations = array();
$translations[] = array(' ','male','female');
$translations[] = array(' ','man','woman');
$translations[] = array(' ','husbent','wife');
$translations[] = array(' ','brother','sister');
$translations[] = array(' ','father (dad)','mother (mum)');
$translations[] = array(' ','brother','sister');
$translations[] = array(' ','son','daughter');
$translations[] = array(' ','parent','child');
// echo $html->table($translations);

$row = array();
$row['id'] = 0;
$row['fname'] = '?';
$row['sex'] = 'Hariot';
$row['birthday'] = '1-1-1946';
$table[] = $row;



$row = array();
$row['id'] = 20;
$row['fname'] = 'Jean';
$row['sex'] = 'Hariot';
$row['birthday'] = '1-1-1946';
$table[] = $row;

$row = array();
$row['id'] = 30;
$row['fname'] = 'Margerite';
$row['sex'] = 'Carminati';
$row['birthday'] = '1-1-1946';
$table[] = $row;


$row = array();
$row['id'] =1;
$row['fname'] = 'Guy';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 11;
$row['fname'] = 'Jean baptiste';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 12;
$row['fname'] = 'isabelle';
$row['sex'] = 'v';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 13;
$row['fname'] = 'Sylvain';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;


$row = array();
$row['id'] =2;
$row['fname'] = 'Giles';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 21;
$row['fname'] = 'Sandrine';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 22;
$row['fname'] = 'Patrice';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;


$row = array();
$row['id'] =3;
$row['fname'] = 'Daniel';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 31;
$row['fname'] = 'Claire';
$row['sex'] = 'V';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 32;
$row['fname'] = 'Manoel';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 33;
$row['fname'] = 'Gaetan';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 34;
$row['fname'] = 'Marylene';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;

$row = array();
$row['id'] = 4;
$row['fname'] = 'Didier';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 41;
$row['fname'] = 'Sandrine';
$row['sex'] = 'V';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 42;
$row['fname'] = 'Lucie';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 43;
$row['fname'] = 'Loic';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 44;
$row['fname'] = 'Eliotte';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;

$row = array();
$row['id'] =5;
$row['fname'] = 'Fabien';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 51;
$row['fname'] = 'Vanessa';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 52;
$row['fname'] = 'Jade';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 53;
$row['fname'] = 'Julie';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;

$row = array();
$row['id'] =6;
$row['fname'] = 'Francoise';
$row['sex'] = 'V';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 61;
$row['fname'] = 'Christian';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 62;
$row['fname'] = 'Damien';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 63;
$row['fname'] = 'Florence';
$row['sex'] = 'V';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 64;
$row['fname'] = 'Anselien';
$row['sex'] = 'V';
$row['birthday'] = '1-1-1946';
$table[] = $row;

$row = array();
$row['id'] = 7;
$row['fname'] = 'Genevieve';
$row['sex'] = 'V';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 71;
$row['fname'] = 'Jean';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 72;
$row['fname'] = 'Jerome';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 73;
$row['fname'] = 'Alexandre';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 74;
$row['fname'] = 'Nicolas';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;


$row = array();
$row['id'] = 8;
$row['fname'] = 'Dominique';
$row['sex'] = 'V';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 81;
$row['fname'] = '*Marc*';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 82;
$row['fname'] = 'Florian';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 83;
$row['fname'] = 'Danae';
$row['sex'] = 'V';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 84;
$row['fname'] = 'Lena';
$row['sex'] = 'V';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 85;
$row['fname'] = 'Sacha';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;


$row = array();
$row['id'] = 9;
$row['fname'] = 'Christine';
$row['sex'] = 'V';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 91;
$row['fname'] = 'Denis';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 92;
$row['fname'] = 'Marie';
$row['sex'] = 'V';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 93;
$row['fname'] = 'Vivian';
$row['sex'] = 94;
$row['birthday'] = '1-1-1946';
$table[] = $row;


$row = array();
$row['id'] = 10;
$row['fname'] = 'Cathy';
$row['sex'] = 'V';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 101;
$row['fname'] = 'Gerard';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 102;
$row['fname'] = 'Samuel';
$row['sex'] = 'M';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 103;
$row['fname'] = 'Virgini';
$row['sex'] = 'V';
$row['birthday'] = '1-1-1946';
$table[] = $row;
$row = array();
$row['id'] = 104;
$row['fname'] = 'Valerie';
$row['sex'] = 'V';
$row['birthday'] = '1-1-1946';
$table[] = $row;

$famille = $table;
// echo $html->table($table,0);

$relation = array();
$relation[] = array(20,30,1);
$relation[] = array(20,30,2);
$relation[] = array(20,30,3);
$relation[] = array(20,30,4);
$relation[] = array(20,30,5);
$relation[] = array(20,30,6);
$relation[] = array(20,30,7);
$relation[] = array(20,30,8);
$relation[] = array(20,30,9);
$relation[] = array(20,30,10);

$relation[] = array(1,0,12);
$relation[] = array(1,0,13);
$relation[] = array(1,0,11);

$relation[] = array(2,0,21);
$relation[] = array(2,0,22);
$relation[] = array(2,0,23);

$relation[] = array(3,31,32);
$relation[] = array(3,31,33);
$relation[] = array(3,31,34);

$relation[] = array(4,0,42);
$relation[] = array(4,0,43);
$relation[] = array(4,41,44);

$relation[] = array(5,51,52);
$relation[] = array(5,51,53);
$relation[] = array(5,51,54);

$relation[] = array(6,61,62);
$relation[] = array(6,61,63);
$relation[] = array(6,61,64);

$parents = array(20,1,2,3,4,5,6);
foreach($parents as $parent)
{
//    $tables = array();
    $row0 = array();
    $row1 = array();
    $row2 = array();
    foreach($relation as $rel)
    {
        if($rel[0]==$parent or $rel[1]==$parent)
        {
            if(empty($row0) or $rel[0]!= $row0[0] or $rel[1]!= $row0[1] )
            {
                if(!empty($row0))
                $tables[] = array($row1,$row2);
    
                $row0[0] = $rel[0];
                $row0[1] = $rel[1];
                $row1 = array();
                $row2 = array();
            }
            foreach($famille as $member)
            {
                if($member['id'] == $rel[0])
                $row1[0] = $member['fname'];
                if($member['id'] == $rel[1])
                $row1[1] = $member['fname'];
    
                if($member['id'] == $rel[2])
                $row2[] = $member['fname'];
            }
        }
    }
    
    $tables[] = array($row1,$row2);
    //print_r($table);

}
    foreach($tables as $table)
    {
        echo $html->table($table);
    }
    

$parent = 11;
$table = array();
$row = array();
$col0 = array();
$col1 = array();
foreach($relation as $rel)
{
    $row = array();
    if($rel[0]==$parent or $rel[1]==$parent)
    {
        foreach($famille as $member)
        {
            if($member['id'] == $rel[0])
            $row[0] = $member['fname'];
            
            if($member['id'] == $rel[1])
            $row[1] = $member['fname'];
        
            if($member['id'] == $rel[2])
            $row[2] = $member['fname'];
        }                   
    }
    $table[] = $row;
}
// echo $html->table($table);

?>
<div class="spacer"></div>
</div>

</div>
