.....................................................................JAVASCRIPT CODESSSS. FOR VALIDATION  ..............................

 1)JS VALIDATION FOR PHONE NUMBER.


a)........

 var x=document.forms["registration_form"]["mob"].value;
  if (x==null || x=="")
  {
  alert("Mobile number must be filled out");
  return false;
  }
  
if(isNaN(x))
{
    alert("enter only Number");
    return false;
}
if(x.length<=9)
{
    alert("Enter 10 Digit Mobile Number");
return false;
}




....

b)......
<input  type="text" name="firstname" value="" onkeyup="this.value=this.value.replace(/[^\d]/,'')" >

c)....

<script>
    function confirmfrmSubmit(){
        var a = document.getElementById('mobile').value;
        if(a.length<=9){
            alert("Enter 10 Digit Mobile Number");
             return false;
        }else{  
        return true;
        }
    }
</script>



echo $this->Form->Create('Users',array('url'=>'/Users/signup','onSubmit' => 'return confirmfrmSubmit();')); 


  echo $this->Form->input('mobile',array('id'=>'mobile','onkeyup'=>"this.value=this.value.replace(/[^\d]/,'')",'maxlength'=>'10'));


d)<script type='text/javascript'>
function lengthRestriction(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters");
		elem.focus();
		return false;
	}
}
</script>
<form>
Username(6-8 characters): <input type='text' id='restrict'/>
<input type='button' 
	onclick="lengthRestriction(document.getElementById('restrict'), 6, 8)"
	value='Check Field' />
</form> ... to enter min 6 and max 8 letters
.......................................................VALIDATION FOR ALBHABET...........................................................................


1) echo $this->Form->input('name',array('onkeyup'=>"this.value=this.value.replace(/[^\A-Za-z]/,'')"));


..............................................................AUTO SAGATION OFF ..........................................................................
1)<input type="text" name='search' id="search" class="input-block-level" autocomplete="off" placeholder="search...">


................................................VALIDATION FOR enter name........................................................................................

1)echo $this->Form->input('name',array('label'=>' ','value'=>'Enter Patient Name','onblur'=>"if(this.value==''){this.value='Enter Patient Name';}" ,'onFocus'=>"if(this.value=='Enter Patient Name'){this.value='';}"));
........................................................................................................................................................................
2)CODE FOR CARD NUMBER ENTER >>UPTO 20 digit.

 a)............
<html>
<script>
function checkString(text) {
if(/[^A-Za-z\d ]/.test(text)){
alert('String should contain letters and numbers only!');
document.getElementById("st").value="";
return false;
}
if(text.length>16){
alert('You cannot exceeds the limit of 16 digits!');
document.getElementById("st").value="";
return false;
}
return true;
}
</script>
Enter Name:&nbsp&nbsp&nbsp<input type="text" id="st" onkeyup="checkString(this.value);">
</html>


b).....


<input  type="text" name="firstname" value="" onkeyup="this.value=this.value.replace(/[^\d]/,'')" maxlength="16">



c)..............
<input  type="text" name="firstname" value="" onkeyup="if(this.value.length==16){} if(this.value.length > 16) { this.value = this.value.replace(this.value,'')}" maxlength="16">

e)...................
<input  type="text" name="cardnumber" maxlength="16" value="<?=$cardnumber?>"  onkeyup="this.value=this.value.replace(/[^\d]/,'');if(this.value.length==16){} if(this.value.length > 16) { this.value = this.value.replace(this.value,'')}" maxlength="16">


d)  if(x.cardnumber.value.length>16)
		{
		alert('Card number accept 16 numbers only');
		return false;
		}
.............................................................................................................................................................


3) VALIDATION FOR EMAIL ADDRESS....

a) var x=document.forms["registration_form"]["email"].value;

if (x==null || x=="")
  {
  alert("Email ID must be filled out");
  return false;
  }
  var x=document.forms["registration_form"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Enter valid e-mail address");
  return false;
  }



b)...................
<html>
<head>
<script type="text/javascript">
$(document).ready(function(e){
$('#btnSubmit').click(function(){
var email = $('#txtEmail').val();
if ($.trim(email).length == 0) {
alert('Please Enter Valid Email Address');
return false;
}
if (validateEmail(email)) {
alert('Valid Email Address');
return false;
}
else {
alert('Invalid Email Address');
return false;
}});
});
</script>
</head> <body>
Email Address: <input type="text" id="txtEmail"/><br/>
<input type="submit" id="btnSubmit" Value="Submit" />
</body>
</html> 

c) if(empty($email)){
        $status = "error";
        $message = "You did not enter an email address!";
    }
    else if(!preg_match('/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/', $email)){ //validate email address - check if is a valid email address
            $status = "error";
            $message = "You have entered an invalid email address!";
    }
................................................................................................................................................................

4)validation for amt.
<script language="javascript">

function amount_value()

{

if(document.form.amount.value=="")
             {
                       alert("Enter the amount value first");
                        return false;
              }
}

</script>


<input  type="text" name="amount" id="amount" value="<?=$amount?>" maxlength="50" >

<form method="post" action="confirm_reward.php"  enctype="multipart/form-data"  onsubmit="return amount_value()" name="form">
..............................................................................................................................................
5)	Validation For Phone Number and Mobile Number..

           <script language="javascript">
        function Validate()
        {
            var x = document.form1.txtPhone.value;
            var y = document.form1.txtMobile.value;
           if(isNaN(x)||x.indexOf(" ")!=-1)
           {
              alert("Enter numeric value")
              return false;
           }
           if (x.length>8)
           {
                alert("enter 8 characters");
                return false;
           }
           if (x.charAt(0)!="2")
           {
                alert("it should start with 2 ");
                return false
           }

           if(isNaN(y)||y.indexOf(" ")!=-1)
           {
              alert("Enter numeric value")
              return false;
           }
           if (y.length>10)
           {
                alert("enter 10 characters");
                return false;
           }
           if (y.charAt(0)!="9")
           {
                alert("it should start with 9 ");
                return false
           }
        }
        </script>

... http://p2p.wrox.com/javascript-how/64920-validation-phone-number-mobile-number.html...

..............................................................................................................................................................
6)VALIDATION FOR UPPERCASE TO LOWERCASE

<!DOCTYPE html>
<html>
<head>
<script>
function displayResult()
{
var x=document.getElementById("fname");
x.value=x.value.toLowerCase();
}
</script>
</head>
<body>

<p>A function is triggered when the user releases a key in the input field. The function transforms the character to upper case.</p>
Enter your name: <input type="text" id="fname" onkeyup="displayResult()">

</body>
</html>
...............................................................................................................................................................

7)CHECK BOX WITH ONE SELECTED....
Given this HTML URL: http://stackoverflow.com/questions/9709209/html-select-only-one-checkbox-in-a-group

<input type="checkbox" class="radio" value="1" name="fooby[1][]" />
<input type="checkbox" class="radio" value="1" name="fooby[1][]" />
<input type="checkbox" class="radio" value="1" name="fooby[1][]" />
<p>&nbsp;</p>
<input type="checkbox" class="radio" value="1" name="fooby[2][]" />
<input type="checkbox" class="radio" value="1" name="fooby[2][]" />
<input type="checkbox" class="radio" value="1" name="fooby[2][]" />

Use the script below:

$("input:checkbox").click(function() {
    if ($(this).is(":checked")) {
        var group = "input:checkbox[name='" + $(this).attr("name") + "']";
        $(group).prop("checked", false);
        $(this).prop("checked", true);
    } else {
        $(this).prop("checked", false);
    }
});


















...............................................................///////////////////////////////////////////////...................................................
CODE FORM TABLE CREATION.....

          function ddlCheckBoxes($country_name,$selected_val,$strCountryName)
                  {       
                        $countryarray[]=$strCountryName;        
                        $QuertCountry=$this->db->Execute("select * from ".self::$table);
                        $string = '<table width="100%">';
			$m=1;
        	        while($RsCountry=$this->db->FetcharrayRow($QuertCountry))
			{
				//echo $m."<br>";
                        
	                  if($m%5==1)
				$string.="<tr>"; 
              	 $string.= "<td><input type='checkbox'  id=".$RsCountry[0]."  name='Country[]' value=".$RsCountry[7]." /><label for=".$RsCountry[1].">".$RsCountry[1]."</label></td>";
	                  if($m%4==0)
			  {
				$string.="</tr>"; 	
				$m=1;
			  }else{
				$m++;
			  }
			} 				
                              
                       $string  .= '<table>';
                       return $string;
                  }
........................................................................................................................................................................

WHEN VALUES ARE SELECTED ....... 

<select>
<option value="Sales" <? if ($pg == '1') { echo "selected"; } ?> >Sales</option>
<option value="IT" <? if ($pg == '2') { echo "selected"; } ?> >IT</option>
</select>



.........................................................................CSS ISSUES................................................................................
<div style="float: left; width: 50%;">
Lorem ipsum
</div>
<div style="float: right; width: 50%;">
dolor sit amet
</div>

////<div class="actions" style="align:bottom;float: left; width: 50%;">
    Graph
</div>///



.............................................................MOODLE......................PATHS........................................................................
1) (in Settings > Site administration > Plugins > Authentication > Manage authentication) for authentication.




.....................................XML INFO .....................................................IN CORE PHP ................................................

1)$xml = '<?xml version="1.0" encoding="UTF-8"?>
    <store-inventory
        xmlns="http://seller.marketplace.sears.com/catalog/v2"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://seller.marketplace.sears.com/SellerPortal/s/schema/rest/inventory/import/v2/store-inventory.xsd">
        <item item-id="10">
            <locations>
                <location location-id="21">
                    <quantity>20</quantity>
                    <pick-up-now-eligible>false</pick-up-now-eligible>
                </location>
            </locations>
        </item>
    </store-inventory>';

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_URL, "https://seller.marketplace.sears.com/SellerPortal/api/inventory/fbm-lmp/v6?email={email}&password={pass}"); 
curl_setopt($ch, CURLOPT_PORT, 443);
curl_setopt($ch, CURLOPT_PUT, 1); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_POSTFIELDS,array($xml));
$http_result = curl_exec($ch);
if($http_result){
    echo $http_result;
}else{
    echo curl_error($ch);
}

curl_close($ch); 

...........................................

Your first Curl scripts

resource curl_init ( [string url])

bool curl_setopt ( resource curl_handle, string option, mixed value)

mixed curl_exec ( resource curl_handle)

mixed curl_close ( resource curl_handle)

The first Curl script we are going to look at is the simplest Curl script that is actually useful - it will load a web page, retrieve the contents, then print it out. So, keeping the four-step Curl process in mind, this equates to:

    Initialise Curl

    Set URL we want to load

    Retrieve and print the URL

    Close Curl

 <?php
    $curl = curl_init();
    curl_setopt ($curl, CURLOPT_URL, "http://www.php.net");
    curl_exec ($curl);
    curl_close ($curl);
?> 




.......................................................................................................................................................................

    AUTH SOME IMPORTENT things...
............
    public $components = array(
        'Session','Auth' => array(
            'loginRedirect' => array('controller' => 'Colleges', 'action' => 'welcomepage'),
            'logoutRedirect' => array('controller' => 'Colleges', 'action' => 'index')
        )
    );

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
       $this->Auth->loginError="Username or passord in incurrect,plz try again";
    }
       public function beforeFilter()
         {
            parent::beforeFilter();
            if($this->Auth->user()) {
            if($this->Auth->data['Colleges']['admin_name']!=NULL)
            {   
                
                $this->Auth->fields = array('admin_name'=>'password');
                $this->Auth->loginError="Username or passord in incurrect,plz try again";
                $this->Auth->loginAction=array('action'=>'welcomepage');
            }
         }}

...........................................................................CHECK BOX FEATURE........................................
1)
<?php       echo $form->input('describeJob', array('label' => false,
                                                    'div' => false,
                                                    'type' => 'select',
                                                    'multiple'=>'checkbox',
                                                    'legend' => 'false',
                                                    'options' => array('Physical' => 'Physical','Mental' => 'Mental', 'Stressful' => 'Stressful',  'Easy-going' => 'Easy-going', 'Secure' => 'Secure', 'Non-secure' => 'Non-secure', 'Exhausting' => 'Exhausting', 'Relaxing' => 'Relaxing' )
                                                      )); ?>

.....
  if (!empty($this->data)) {
        $this->data['Job']['describeJob'] = implode(",",$this->data['Job']['describeJob']);
                $this->Job->create();



2)
function ddlCheckBoxes($country_name,$selected_val,$strCountryName)
                  {    
                       
                        $countryarray= explode(",",$strCountryName); 
                        //print_r($countryarray);die;    
                        $QuertCountry=$this->db->Execute("select * from ".self::$table);
                        $string = '<table width="100%">';
			$m=1;
        	        while($RsCountry=$this->db->FetcharrayRow($QuertCountry))
			{
				//echo $m."<br>";
               
                         
	                  if($m%5==1)
		          $string.="<tr>"; 
                          $selected='';
                         if(in_array($RsCountry[7],$countryarray))
                                  {
                                     $selected="Checked='checked'";
                                  }
              	          $string.= "<td><input type='checkbox'  id=".$RsCountry[0]."  name='Country[]' value=".$RsCountry[7]." $selected /><label for=".$RsCountry[1].">".$RsCountry[1]."</label></td>";
	                  if($m%4==0)
			  {
				$string.="</tr>"; 	
				$m=1;
			  }else{
				$m++;
			  }
			 				
                      }
                        
                       $string  .= '<table>';
                       return $string;
                  }



............................................................................SELECT BOX FEATURE ..............................................
1)function country($country_name,$selected_val)
  {
    if($selected_val=="")
	 {
	   $selected_val="";
	 }
	 $Country="<select name='".$country_name."' id='".$country_name."' class='select' style='width:150px'>";
	 $Country.="<option value=''";
	 $Country.=">Select...</option>";
	 $QuertCountry=$this->db->Execute("select * from countries WHERE ISO2 != 'OT'"); 
	 while($RsCountry=$this->db->FetchobjectRow($QuertCountry))
	    {
		  $Country.="<option value='".$RsCountry->ISO2."'";
		  if($RsCountry->ISO2==$selected_val)
		   {
		  	 $Country.="SELECTED"; 
		   }
		  $Country.=">".$RsCountry->Country."</option>";
		}
    $Country.="</select>";
	return $Country;
  }

...................................................IMPLODE FUNTION...............................................................................................
1)
   public function subjectchoose($student_id = NULL)
        {
           $this->set('value',$this->Subjects->find('all',$student_id));
           $this->set('student_id',$student_id);
        
             if (!empty($this->data)) 
                     {
                $std_id= $this->data['studen_id'];
                    
                  foreach($this->data as $key=>$value):
                  endforeach;
                  
               $Sbjvalue=implode(",",$value);
                 
          //   $this->Studentsubjects->saveField('student_id',$std_id);
           //   $this->Studentsubjects->saveField('subject_id',$Sbjvalue);
            $this->Studentsubjects->save(array('subject_id'=> $Sbjvalue,'student_id'=>$std_id));
            // $this->Studentsubjects->saveField('student_id',$std_id,'subject_id',$Sbjvalue);
                 
              }

..............................................................................UPDATE OF VALUE .................................................................

1)$this->Baker->updateAll(
    array('Baker.approved' => true),
    array('Baker.created <=' => $this_year)
);


...........................................................IMAGE UPLOAD IN CAKEPHP........................................................
 1)public function addproduct() {
        if ($this->request->is('post')) {
            $this->Product->Create();
            if ($this->FileUpload->success) {
                $this->request->data['Product']['file'] = $this->FileUpload->finalFile;
                if ($this->Product->save($this->request->data)) {
                    $this->Session->setFlash('Product Added');
                    $this->redirect(array('controller' => 'admin', 'action' => 'home'));
                } else {
                    $this->Session->setFlash('Unable to add your Product.');
                }
            }
        }
        $this->set('categories', $this->Category->find('list'));
    }

2)http://bakery.cakephp.org/articles/floorball92/2009/08/02/image-component-for-upload-and-thumbnail-phpthumb

....................................JAVASCRIPT INCAKE PHP..............................................................................................
1)
you must have to put all js into your webrrot js folder and call this by simple a line
 $this->Html->script('your-js-file-name-here');

2)call js but ths  like ths ($this->Html->script('your-js-file-name-here'); ) in view folder or any where ....



............................................................CREATING PDF in cakephp..............................................................................

1)http://www.syahzul.com/blogs/item/generate-pdf-in-cakephp-2-x-with-dompdf
2)/opt/lampp/htdocs/cake_new/app/View/Layouts/pdf ..... here add default cpt.
3)in side view .. /opt/lampp/htdocs/cake_new/app/View/Colleges/pdf ...add cpt whom pdf i have to create php file.


................................................................POP UP WINDOW ..................................................................................
1) <script>
function myFunction(name,job)
{
alert("Welcome " + name + ", the " + job);
}
</script>

on click .... <button onclick="myFunction('<?php echo $val1.','.$val2; ?>')">Try it</button>
....................................................................................................
2)<script language="javascript" type="text/javascript">

function popup(id) {
window.open('http://localhost/cake_new/Colleges/editresultadmin/'<?php echo id; ?>,'popUpWindow','height=700,width=1000');
}
</script>

<td><a href="#" onclick="popup("' . $student_info['Student']['student_id']. '")">view result</a></td>

.................................................DATE GENERATION CODE ........................................................................................
  1) $offset1=5*60*60;
  $offset2=1*60*60/2;
  $offset =$offset1+$offset2;
 echo  $utc_str = gmdate("Y-m-d", time()).'  '. gmdate("H:i:s", time()+$offset);
   2)
        echo date ('d/m/y h:i:s'); 
   3)
        echo gmdate("Y-m-d\TH:i:s\Z"); 
   4)ini_set("date.timezone","America/New_York"); ... Time set zone.


.........................................................................................JS MAI VALUES INSERT THROUGT ........................................
1) var chart_days=new Array();
    chart_days.push(<?php echo $chart_days;?>);

2) var chart_days=['365','300','250','200','182','90','50','7','1','0'];
      var days=chart_days.indexOf('<?php echo $chart_days;?>');  ......................of set check ...


................................................................SWITCH TO PRINT DATA OF ROW ,IN CAKE PHP .....................................................
1)  
 foreach ($info as $student):
$sub = $student['Studentsubjects']['subject_id']; 

switch ($sub)
{
case 1:
 $sub_nam = "MATHS";
  break;
case 2:
   $sub_nam = "PHYSICS";
  break;
case 3:
  $sub_nam = "CHEMISTORY";
  break;
case 4:
  $sub_nam = "HISTORY";
  break;
case 5:
  $sub_nam = "ENGLISH";
  break;
case 6:
  $sub_nam = "ECHONOMICS";
  break;
default:
  $sub_nam = "";
  break;
}
 
    ?><td><?php echo $sub_nam;?></td><td><input type="text" name="<?php echo $sub;?>" value="<?php echo $student['Studentsubjects']['marks']; ?>"id="example_text"/>
   
<?php
     endforeach;?>

...................................................cSS FOR STATIC PAGE >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
1)  <div style="min-width:100%; height:400px; margin: 0 auto"> </div>


................................................GET URL OF SERVER >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>.......................
1)echo $_SERVER['REQUEST_URI'];die; 

...................................................AJAX CODE >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>..................
1) 
<script type="text/javascript">
	
	 $(document).ready (function(){ 
     	  $("#indicus_name12").change(function(){   
              var indices_id=$(this).val();
		var Url= "<?php echo base_url().'admin/categories_controller/ajax/';?>";
		var datastring = {"indices_id_value":indices_id};
		var ajaxresponse='';
			$.ajax({
			  url: Url,
			  type: 'POST',       
			  data: datastring,
			  async:false,
			  success: function(data){ 
				ajaxresponse= data;
                                $("#indicus_name1234").html(ajaxresponse);
                                console.log(ajaxresponse);
			  }
			});
	  });
      });
 </script>
............................................................ARRAY CODE >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>.......................

1)  $property_ids = array( 6589, 6592, 6594, 6597, 6598,6588, 6599, 6600, 6601, 6602);
   
$arr3 = $arr4 = array();
        $flag=0;

    foreach($property_ids as $arr) { 
    if ("6588"==$arr) {
    echo "Got Irix";
    $flag=1;
}elseif($flag==1) {
        $arr3[] = $arr;
    }else{
         $arr4[] = $arr;
    }
    
     }
     echo '<pre>';
     print_r($arr3);
print_r($arr4);die;

2)$Compliance=array();
            foreach($complete_data as $values)
            {
               $patient_id=$values['u1']['id'];
               $Compliance[] = $this->Report->find('first', array('fields' =>array('Report.patient_id,id,icode_period,days'), 'conditions' => array('patient_id'=>$patient_id),'order'=>'created_date DESC'));
            }
           $this->set(compact('Compliance',$Compliance));    
           echo "<pre>";   echo print_r($Compliance);die;

.................................................................................JS CODE >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

1)$current_page_URL = $_SERVER['HTTP_REFERER'];
	

	$limit= JRequest::getVar('que');
		if(!$limit)
		{
			$limit = 1 ;
		}
		else{
			$limit = $limit+1;
		}
                 $currenturl = $current_page_URL.'&que='.$limit.'&type='.$items[0]->type;
		
	
	?>
	<div><a href="<?php echo $currenturl; ?>">Next</a></div>
.....................................................................URL DATA CREATION>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>................

1)$data['propertyDetailPrevious'] ='http://'.$_SERVER['SERVER_NAME'].'/ci_evviacasa/property_detail/getSinglePropertyDetail/'.$arr3;
$data['propertyDetailNext'] ='http://'.$_SERVER['SERVER_NAME'].'/ci_evviacasa/property_detail/getSinglePropertyDetail/'.$arr4;

2)$url =base_url(); //print_r($url);
$tempURL =$_SERVER['REQUEST_URI']; //print_r($tempURL);die;
$arr = explode("/",$tempURL); //print_r($arr);die;
$tempURL1='';
for($i=2;$i<(count($arr)-1);$i++)
{
	$tempURL1 .=$arr[$i].'/';
}
$url = $url .$tempURL1;
/* End */


..............................................................LIST FEATURE IN ARRAY >>>>>>>>>>>>>>>>>>>>>>...........................

1)if($arrTempCityName!='')
list($cityIstatCode,$cityName)= explode("_",$arrTempCityName);


................................................................SEND STRING IN JS>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>,,,,,,,,,,
1)<a href="#" onclick="return showRecord(\''.$row['name'].'\',\''.$row['email'].'\',\''.$row['message'].'\');">Show</a>



//////////////////////////////////////////CALLING OF ONE funtion into another funtion  ///////////////////////////////////////////////////////////////////////////////
1)function deleteCategore(page ,id,retURL='')
  {
  var url='category_list.php?class=gettotalImageRecords&id='+id;
  var noImages=callAjax(url);
          
 var tFalse=confirm ('This category has '+noImages+' images below, do you want to erase ?');	
 if(tFalse)
 {
	 window.location="nbn_check_action.php?mode=del&class="+page+"&id="+id+"&retURL="+retURL;
 }
 else{
 	return false;
 }
} 
 function callAjax(url)
    {
      var ajaxresponse='';
      $.ajax({
        url: url,
        type: 'GET',       
      	async:false,
        success: function(data){	  
        ajaxresponse=data;
        }
      });      
      return ajaxresponse;
 }

/////////////////////////////////////////////////////////////////WAY TO Include files//////////////////////////////////////////////////////////////////////////
1)  $dirpath=dirname(dirname(__FILE__));
    include($dirpath.'/views/ajaxResultPage.php'); 

2) if (is_dir('path')) {
    rmdir('path');
}                                                //////////////////   DELETE folder



.................................................................UPPER CASE MAI CUNVERT KER HAI THO .....................................
3)ucwords(strtolower($bar))


/////////////////////////////////////////////////////////////////////iframe code //////////////////////////////////////////////////////////////

1)<div align="center" style="font-size: 10px;font-weight: bold;color:#0066FF" id="youtube_div">
<iframe scrolling="no" frameborder="0" style="width:650; height:410; border:0px" src="http://www.youtube.com/watch?v=StphRCLkx6Q" name="myVideo">
</iframe></div>

////////////////////////////////////////////////////find array in query //////////////////////////////////////////////////////////////////////////
1) $arr1= array(2,3,5);
$where = " WHERE id =1 ";
foreach($arr1 as $val)
{
  $where .= " AND FIND_IN_SET($val, message)";
}
echo $sql = "SELECT * FROM `s_chat_messages` ".$where;

//////////////////////////////////////////    SERALIZEL LARGE DATA //////////////////////////////SEND throught ajax /////////////////
1)data1 = "<?php echo addslashes(serialize($data)); ?>";
    print_r(unserialize(stripslashes($_REQUEST['data'])));
2)get 
print_r(serialize(addslashes($_REQUEST['data'])));


////////////////////////////////MAIL FUNCTION FOR  ATTATCHEMENT    ////////////////////////////////////////////////

1)function mail_attachment($filename, $path, $mailto, $from_mail, $from_name, $replyto, $subject, $message) {
    $file = $path.$filename;
    $file_size = filesize($file);
    $handle = fopen($file, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
    $content = chunk_split(base64_encode($content));
    $uid = md5(uniqid(time()));
    $name = basename($file);
    $header = "From: ".$from_name." <".$from_mail.">\r\n";
    $header .= "Reply-To: ".$replyto."\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
    $header .= "This is a multi-part message in MIME format.\r\n";
    $header .= "--".$uid."\r\n";
    $header .= "Content-type:text/plain; charset=iso-8859-1\r\n";
    $header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $header .= $message."\r\n\r\n";
    $header .= "--".$uid."\r\n";
    $header .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n"; // use different content types here
    $header .= "Content-Transfer-Encoding: base64\r\n";
    $header .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
    $header .= $content."\r\n\r\n";
    $header .= "--".$uid."--";
    if (mail($mailto, $subject, "", $header)) {
        echo "mail send ... OK"; // or use booleans here
    } else {
        echo "mail send ... ERROR!";
    }
}

////////////////////////////////////////////CAKEPHP CODING /////////////////////////////////////////////////

1) Jesa CSubscription.created k liye pehle model ko temporarily unbind krna zaruri h ... otherwise default association problem create karega.. Thats what was happening

$this->CSubscription->unbindModel(array('hasMany' => array('CitiesContractor')));
 the include the table in JOINS array like this :
array(
'table' => 'cities',
'alias' => 'City',
'type' => 'inner',
'foreignKey' => false,
'conditions'=> array('CitiesContractor.city_id = City.id'));
													),
////////////////////////////////////// CREATE LINK AT through AJAX//////////////////////////////////
1)function getresult(id)
{
$.post('placeholder_add.php', {
		id:id,
	}, function(response){
		//alert(response);
		$("#urlTest").attr("href","sponser_image_info.php?id="+id);
	});
}

///////////////////////////////////////////////////////ADD ACTION URL ////////////////////////////////////////////////////
1)document.getElementById("register-form").action ='nbn_check_action.php?class=placeholder&id='+msg+'&action=edit';
2)function getresult_placeholder(value)
{

	var data_str='';
	$.ajax({
		type:"POST",
		url: "ajax/ajaxdatapage.php?id="+value+"&type=placeholder",
		data: data_str,
		success: function(msg){
			//var arr=msg.split(" "); alert(arr);
                         if(msg>0)
                             {
                                 $.post('placeholder_add.php', {
		                          msg:msg,
	                                  }, function(response){
		                         document.getElementById("register-form").action ='nbn_check_action.php?class=placeholder&id='+msg+'&action=edit';
	                             });
                             }
                             else
                                 {
                                     $.post('placeholder_add.php', {
		                          msg:msg,
	                                  }, function(response){
		                         document.getElementById("register-form").action ='nbn_check_action.php?class=placeholder&id='+0+'&action=add';
	                             });
                                 }
		}
	});
}

//////////////////////////////////////////////////////////////////////////////CODE for spit array in js ////////////////////////////////////////////////

1)var code = this.id;
			var arr=code.split('_');

			var id=arr[1];

