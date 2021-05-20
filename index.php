<html>
	<head>
		<title>Student Form and Calculator using JS</title>
	</head>
	<body>
		<script>  
			function add(){
				var a = +document.getElementById("a").value;
				var b = +document.getElementById("b").value;
				document.getElementById("answer").innerHTML = a + " + " + b + " = " + (a+b);
			}
			
			function sub(){
				var a = +document.getElementById("a").value;
				var b = +document.getElementById("b").value;
				document.getElementById("answer").innerHTML = a + " - " + b + " = " + (a-b);
			}
			
			function mul(){
				var a = +document.getElementById("a").value;
				var b = +document.getElementById("b").value;
				document.getElementById("answer").innerHTML = a + " * " + b + " = " + (a*b);
			}
			
			function div(){
				var a = +document.getElementById("a").value;
				var b = +document.getElementById("b").value;
				document.getElementById("answer").innerHTML = a + " / " + b + " = " + (a/b);
			}
			
			function mod(){
				var a = +document.getElementById("a").value;
				var b = +document.getElementById("b").value;
				document.getElementById("answer").innerHTML = a + " % " + b + " = " + (a%b);
			}
			
			function txt(){
				var xname = document.getElementById("name").value;
				if(xname==null || xname==""){
					document.getElementById("warn1").innerHTML = "Form empty!";
					document.getElementById("name").placeholder = "Input your name here";
				} else {
					document.getElementById("info1").innerHTML = "NAME: " + xname;
					document.getElementById("warn1").innerHTML = "";
				}
				var xprog = document.getElementById("prog").value;
				if(xprog==null || xprog==""){
					document.getElementById("warn2").innerHTML = "Form empty!";
					document.getElementById("prog").placeholder = "Input your program code here";
				} else {
					document.getElementById("info2").innerHTML = "PROGRAM: " + xprog;
					document.getElementById("warn2").innerHTML = "";
				}
				var xage = document.getElementById("age").value;
				if(xage==null || xage=="" || xage<1){
					document.getElementById("warn3").innerHTML = "Invalid!";
					document.getElementById("age").placeholder = "Input your age here";
				} else {
					document.getElementById("info3").innerHTML = "AGE: " + xage;
					document.getElementById("warn3").innerHTML = "";
				}
				var xgender = document.getElementById("gender").value;
				if(xgender==null || xgender=="null"){
					document.getElementById("warn4").innerHTML = "Invalid!";
				} else {
					document.getElementById("info4").innerHTML = "GENDER: " + xgender;
					document.getElementById("warn4").innerHTML = "";
				}
				var xstate = document.getElementById("state").value;
				if(xstate==null || xstate=="null"){
					document.getElementById("warn5").innerHTML = "Invalid!";
				} else {
					document.getElementById("info5").innerHTML = "STATE: " + xstate;
					document.getElementById("warn5").innerHTML = "";
				}
				var conf = document.getElementById("warn1").innerHTML + document.getElementById("warn2").innerHTML + document.getElementById("warn3").innerHTML + document.getElementById("warn4").innerHTML + document.getElementById("warn5").innerHTML;
				if(conf==""){
					document.getElementById("form").outerHTML = "";
					window.alert("Student information recorded succesfully!");
				} else {
					window.alert("Student information not completed!");
				}
			}
			
			function resetAll() {
  				alert("The form was reset");
				location.reload();
			}
		</script>  
		
		<form id="form" onsubmit="txt();return false;" onreset="resetAll()">
			<h2>STUDENT FORM:</h2>
			
			<p>Name: <input id="name" type="text" name="txtname"> 
				<span id="warn1" style="color:red;"></span> 
			</p>
			
			<p>Program: <input id="prog" type="text" name="txtprog">
				<span id="warn2" style="color:red;"></span>
			</p>
			
			<p>Age: <input id="age" type="number" name="txtage">
				<span id="warn3" style="color:red;"></span>
			</p>
			
			<p>Gender: 
			<select name="txtgender" id="gender">
				<option value="null"></option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
			</select>
				<span id="warn4" style="color:red;"></span>
			</p>
			
			<p>State: <select name="txtstate" id="state">
				<option value="null"></option>
				<option value="Terengganu">Terengganu</option>
				<option value="Pahang">Pahang</option>
				<option value="Selangor">Selangor</option>
				<option value="Kedah">Kedah</option>
				<option value="Perlis">Perlis</option>
				<option value="Kelantan">Kelantan</option>
				<option value="Johor">Johor</option>
				<option value="Pulau Pinang">Pulau Pinang</option>
				<option value="Negeri Sembilan">Negeri Sembilan</option>
				<option value="Melaka">Melaka</option>
				<option value="Perak">Perak</option>
				<option value="Sabah">Sabah</option>
				<option value="Sarawak">Sarawak</option>
				<option value="Labuan">Labuan</option>
				<option value="Kuala Lumpur">Kuala Lumpur</option>
			</select>
				<span id="warn5" style="color:red;"></span>
			</p>
			
			<input type="submit">
			<input type="reset">
			<br><br>
		</form>
		
		<p><b>STUDENT INFORMATION</b></p>
		<p id="info1"></p>
		<p id="info2"></p>
		<p id="info3"></p>
		<p id="info4"></p>
		<p id="info5"></p>
		
		
		<h2>ONLINE CALCULATOR:</h2>
		Enter A: <input id="a" type="number" name="txt1" placeholder="0"><br>
		Enter B: <input id="b" type="number" name="txt2" placeholder="0"><br><br>
		<button type="button" onclick="add()">+</button>
		<button type="button" onclick="sub()">-</button>
		<button type="button" onclick="mul()">*</button>
		<button type="button" onclick="div()">/</button>
		<button type="button" onclick="mod()">%</button>
		
		
		<p><b>CALCULATION ANSWER</b><p id="answer"></p></p>
		
	</body>
</html>