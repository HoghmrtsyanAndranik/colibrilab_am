let numOne = 0
let numTwo = 0
let numThree = 0
let numFour = 0
let numFive = 0
let numSix = 0

$(".x").click(function(){
	let index = $(".x").index(this);
	$(".line-first").eq(index).hide();
	numOne-=1
})

document.querySelector(".skill-plus-first").onclick = newLine



function newLine(){
 document.querySelector(".sfone").style.display = "block"
}
document.querySelector(".check").onclick = ()=>{
	let prc = document.querySelector(".selector").value
	let sldr = document.querySelector(".slider").value
	if(prc == 1){
		document.querySelector(".l-one").style.display = "block"
		document.querySelector(".percent").innerHTML = `${sldr}%`
		document.querySelector(".charge").style.width = `${sldr}%`
		numOne+=1
		document.querySelector(".first").innerHTML = 'Skills'
	}
	else if (prc == 2){
		document.querySelector(".l-sec").style.display = "block"
		document.querySelector(".percent-sec").innerHTML = `${sldr}%`
		document.querySelector(".charge-sec").style.width = `${sldr}%`
		numOne+=1
		document.querySelector(".first").innerHTML = 'Skills'
	}
	else if (prc == 3){
		document.querySelector(".l-th").style.display = "block"
		document.querySelector(".percent-th").innerHTML = `${sldr}%`
		document.querySelector(".charge-th").style.width = `${sldr}%`
		numOne+=1
		document.querySelector(".first").innerHTML = 'Skills'
	}

 document.querySelector(".sfone").style.display = "none"

}


let player = document.querySelector(".body-nn");
new Sortable(player,{
	handle:'.handle',
	animation:200
})


$(".top").click(function(){
	let indexS = $(".top").index(this);
	$(".all-body-first").eq(indexS).slideToggle()
	$(".w").eq(indexS).toggleClass("rot");
})


document.querySelector(".slider").oninput = function(){
	document.querySelector(".range-percent").innerHTML = document.querySelector(".slider").value + "%"
}



function previewImage() {
	let file = document.getElementById("file").files;
	if (file.length > 0) {
		let fileReader = new FileReader();
		fileReader.onload = function (event) {
			document.querySelector(".preview").setAttribute("src", event.target.result);
		};
		fileReader.readAsDataURL(file[0]);
	}
}









document.querySelector(".check-four").onclick = add;


let output = document.querySelector('.body-mini');
let button = document.querySelector('.skill-plus-th');
let input  = document.querySelector('.inLng');

function add() {
	if(input.value === "") return;

	let newMessage = document.createElement('div');
	newMessage.classList.add('line-first-lng');
	let newMessageS = document.createElement('p');
	newMessageS.classList.add('lang');
	let newMessageT = document.createElement('div');
	newMessageT.classList.add('flex-sq');

	numThree+=1
	document.querySelector(".third").innerHTML = 'Languages'
		
	newMessageS.textContent = input.value;

	output.appendChild(newMessage);
	output.appendChild(newMessageS); 
	output.appendChild(newMessageT);
	newMessage.appendChild(newMessageS);
	newMessage.appendChild(newMessageT);

	newMessageT.innerHTML = "<i class='fa fa-times-circle x' aria-hidden='true' style = 'margin-left:40px;'></i><i class='fa fa-pencil pencil' style = 'display:none;'aria-hidden='true'></i><i class='fa fa fa-bars handleS' aria-hidden='true'></i>"
	
	$(".x").click(function(){
		let index = $(".x").index(this);
		// $(".line-first").eq(index).hide();
		// $(".line-first-lng").eq(index).hide();
		$(this).parent().parent().remove();
		numThree -=1
	})
	input.value = ""

	let playerS = document.querySelector(".body-mini");
	new Sortable(playerS,{
		handle:'.handleS',
		animation:200,
	})


	showThird.style.display = "none"
}



document.querySelector(".check-second").onclick = addS;


let outputS = document.querySelector('.body-mini-sec');
let buttonS = document.querySelector('.skill-plus-sec');
let inputS  = document.querySelector('.desc-s');
let descT  = document.querySelector('.desc-t');
let textareaS  = document.querySelector('.textarea-s');

document.querySelector('.month').onchange=function (){getSelectValue()};
document.querySelector('.year').onchange=function (){getSelectValue()};
document.querySelector('.monthS').onchange=function (){getSelectValue()};
document.querySelector('.yearS').onchange=function (){getSelectValue()};

function getSelectValue()
{
	let month  = document.querySelector('.month').value
	let year  = document.querySelector('.year').value
	let monthS  = document.querySelector('.monthS').value
	let yearS  = document.querySelector('.yearS').value
}
function addS() {
	if(inputS.value === "" || descT.value === ""){
		inputS.style.border = "1px solid red"
		descT.style.border = "1px solid red"
		return
	}
	numTwo +=1
	document.querySelector(".second").innerHTML = 'Education'
		
	inputS.style.border = "1px solid #EDEDED"
	descT.style.border = "1px solid #EDEDED"
	let lineSec = document.createElement('div');
	lineSec.classList.add('line-first');
	let flexCol = document.createElement('div');
	flexCol.classList.add('flex-col');
	let flexSec = document.createElement('div');
	flexSec.classList.add('flex-sec');
	let thOfEc = document.createElement('p');
	thOfEc.classList.add('th-of-ec');
	let interval = document.createElement('div');
	interval.classList.add('interval');
	let thatbody = document.createElement('div')
	thatbody.classList.add("new-body")
	
	let desc = document.createElement("div")
	desc.classList.add("area")
	desc.innerText = descT.value
	let descSec = document.createElement("div")
	descSec.classList.add("areaSec")
	descSec.innerText = textareaS.value

	let month  = document.querySelector('.month').value
	let year  = document.querySelector('.year').value
	let monthS  = document.querySelector('.monthS').value
	let yearS  = document.querySelector('.yearS').value

	thOfEc.textContent = inputS.value;
	interval.textContent = `${year} ${month} - ${yearS} ${monthS}`
	thatbody.innerHTML+=`<div class = 'body-sec show-hide hides' style='background-color:#eaeaea;display:block;'><div class = 'content'><p class = 'title-input'>Specialization*</p><input type = 'text' class = 'desc-ss' value = ${inputS.value} placeholder='e.g.Web Design'></div><div class = 'content'><p class = 'title-input'>Education*</p><input type = 'text' class = 'desc-tt' value=${descT.value} placeholder='e.g.Armenian State University'></div><div class = 'content' style = 'display: flex;'><div class = 'part-one' style='margin-right: 22px;'><p class = 'title-input'>Start Date</p><div class = 'flex-content'><select class='month-nn' ><option value='January'>January</option><option value='February'>February</option><option value='March'>March</option><option value='April'>April</option><option value='May'>May</option><option value='June'>June</option><option value='July'>July</option><option value='August'>August</option><option value='September'>September</option><option value='October'>October</option><option value='November'>November</option><option value='December'>December</option></select><select class='yearr' style = 'margin-left: 10px;'><option value='2021'>2021</option><option value='2020'>2020</option><option value='2019'>2019</option><option value='2018'>2018</option><option value='2017'>2017</option><option value='2016'>2016</option><option value='2015'>2015</option><option value='2014'>2014</option><option value='2013'>2013</option><option value='2012'>2012</option><option value='2011'>2011</option><option value='2010'>2010</option><option value='2009'>2009</option><option value='2008'>2008</option><option value='2007'>2007</option><option value='2006'>2006</option><option value='2005'>2005</option><option value='2004'>2004</option><option value='2003'>2003</option><option value='2002'>2002</option><option value='2001'>2001</option><option value='2000'>2000</option><option value='1999'>1999</option><option value='1998'>1998</option><option value='1997'>1997</option><option value='1996'>1996</option><option value='1995'>1995</option><option value='1994'>1994</option><option value='1993'>1993</option><option value='1992'>1992</option><option value='1991'>1991</option><option value='1990'>1990</option><option value='1989'>1989</option><option value='1988'>1988</option><option value='1987'>1987</option><option value='1986'>1986</option><option value='1985'>1985</option><option value='1984'>1984</option><option value='1983'>1983</option><option value='1982'>1982</option><option value='1981'>1981</option><option value='1980'>1980</option><option value='1979'>1979</option><option value='1978'>1978</option><option value='1977'>1977</option><option value='1976'>1976</option><option value='1975'>1975</option><option value='1974'>1974</option><option value='1973'>1973</option><option value='1972'>1972</option><option value='1971'>1971</option><option value='1970'>1970</option><option value='1969'>1969</option><option value='1968'>1968</option><option value='1967'>1967</option><option value='1966'>1966</option><option value='1965'>1965</option><option value='1964'>1964</option><option value='1963'>1963</option><option value='1962'>1962</option><option value='1961'>1961</option><option value='1960'>1960</option><option value='1959'>1959</option><option value='1958'>1958</option><option value='1957'>1957</option><option value='1956'>1956</option><option value='1955'>1955</option><option value='1954'>1954</option><option value='1953'>1953</option><option value='1952'>1952</option><option value='1951'>1951</option><option value='1950'>1950</option></select></div></div><div class = 'part-two'><p class = 'title-input'>End Date</p><div class = 'flex-content'><select class='monthSS-nn'><option value='January'>January</option><option value='February'>February</option><option value='March'>March</option><option value='April'>April</option><option value='May'>May</option><option value='June'>June</option><option value='July'>July</option><option value='August'>August</option><option value='September'>September</option><option value='October'>October</option><option value='November'>November</option><option value='December'>December</option></select> <select class='yearS-nn' style = 'margin-left: 10px;'><option value='2021'>2021</option><option value='2020'>2020</option><option value='2019'>2019</option><option value='2018'>2018</option><option value='2017'>2017</option><option value='2016'>2016</option><option value='2015'>2015</option><option value='2014'>2014</option><option value='2013'>2013</option><option value='2012'>2012</option><option value='2011'>2011</option><option value='2010'>2010</option><option value='2009'>2009</option><option value='2008'>2008</option><option value='2007'>2007</option><option value='2006'>2006</option><option value='2005'>2005</option><option value='2004'>2004</option><option value='2003'>2003</option><option value='2002'>2002</option><option value='2001'>2001</option><option value='2000'>2000</option><option value='1999'>1999</option><option value='1998'>1998</option><option value='1997'>1997</option><option value='1996'>1996</option><option value='1995'>1995</option><option value='1994'>1994</option><option value='1993'>1993</option><option value='1992'>1992</option><option value='1991'>1991</option><option value='1990'>1990</option><option value='1989'>1989</option><option value='1988'>1988</option><option value='1987'>1987</option><option value='1986'>1986</option><option value='1985'>1985</option><option value='1984'>1984</option><option value='1983'>1983</option><option value='1982'>1982</option><option value='1981'>1981</option><option value='1980'>1980</option><option value='1979'>1979</option><option value='1978'>1978</option><option value='1977'>1977</option><option value='1976'>1976</option><option value='1975'>1975</option><option value='1974'>1974</option><option value='1973'>1973</option><option value='1972'>1972</option><option value='1971'>1971</option><option value='1970'>1970</option><option value='1969'>1969</option><option value='1968'>1968</option><option value='1967'>1967</option><option value='1966'>1966</option><option value='1965'>1965</option><option value='1964'>1964</option><option value='1963'>1963</option><option value='1962'>1962</option><option value='1961'>1961</option><option value='1960'>1960</option><option value='1959'>1959</option><option value='1958'>1958</option><option value='1957'>1957</option><option value='1956'>1956</option><option value='1955'>1955</option><option value='1954'>1954</option><option value='1953'>1953</option><option value='1952'>1952</option><option value='1951'>1951</option><option value='1950'>1950</option></select></div></div></div><div class = 'content' style='padding-bottom:30px;'><p class = 'title-input'>Description</p><textarea class = 'textarea-ss'  type = 'text' placeholder='Write your text...' style='margin-top: 7px;height:67px;'>${textareaS.value}</textarea><div class = 'close-secondd'><i class='fa fa-trash' aria-hidden='true'></i><span class = 'del'>Delete</span></div><div class = 'check-secondd'><i class='fa fa-save' aria-hidden='true'></i><span class = 'save'>Save</span></div></div></div>`

	outputS.appendChild(lineSec);
	lineSec.appendChild(flexCol);
	lineSec.appendChild(flexSec); 
	flexCol.appendChild(thOfEc);
	flexCol.appendChild(interval);
	lineSec.appendChild(thatbody);

	flexSec.innerHTML = "<i class='fa fa-times-circle x' aria-hidden='true'></i><i class='fa fa-pencil pencil pen-one fff' aria-hidden='true'></i><i class='fa fa fa-bars handleT' aria-hidden='true'></i>"

	let fff = document.querySelectorAll(".fff")
	let ccc = document.querySelectorAll(".close-secondd")
	for(let c=0;c<fff.length;c++){
		fff[c].onclick = ()=>{
			alert(555)
			// document.querySelectorAll(".new-body")[c].classList.toggle('new-body-none')
			$(".new-body").eq(c).slideToggle();	
				document.querySelectorAll(".line-first")[c+3].classList.toggle("line-first-toggle")
		}
		ccc[c].onclick = ()=>{
			document.querySelectorAll(".line-first")[c+3].remove()
		}
				
				document.querySelectorAll(".check-secondd")[c].onclick=()=>{
				document.querySelectorAll(".th-of-ec")[c].innerText = document.querySelectorAll(".desc-ss")[c].value
					
					let monthh  = document.querySelectorAll('.month-nn')[c].value
					let yearr  = document.querySelectorAll('.yearr')[c].value
					let monthSS  = document.querySelectorAll('.monthSS-nn')[c].value
					let yearSS  = document.querySelectorAll('.yearS-nn')[c].value
					let interval = document.querySelectorAll(".interval")
					interval[c].textContent = `${yearr} ${monthh} - ${yearSS} ${monthSS}`

				document.querySelectorAll(".line-first")[c+3].classList.toggle("line-first-toggle")

				$(".hides").eq(c).slideToggle();


			}
	}
	let cbn = document.querySelectorAll('.month-nn')
		for(let gg = 0; gg<cbn.length;gg++){
					document.querySelectorAll('.month-nn')[gg].value = document.querySelector(".month").value
					document.querySelectorAll('.yearr')[gg].value = document.querySelector(".year").value
					document.querySelectorAll('.monthSS-nn')[gg].value = document.querySelector(".monthS").value
					document.querySelectorAll('.yearS-nn')[gg].value = document.querySelector(".yearS").value
				}

	inputS.value  = ""
	descT.value  = ""
	textareaS.value  = ""

	$(".month").val("January");
	$(".year").val("2021");
	$(".monthS").val("January");
	$(".yearS").val("2021");

	$(".x").click(function(){
		let index = $(".x").index(this);
		$(".line-first").eq(index).remove();
		numTwo -=1
	})
	

	let playerT = document.querySelector(".body-mini-sec");
	new Sortable(playerT,{
		handle:'.handleT',
		animation:200
	})


	show.style.display = "none"


}


document.querySelector(".check-third").onclick = addT;


let outputS_s = document.querySelector('.body-mini-th');
let buttonT = document.querySelector('.skill-plus');
let inputLng  = document.querySelector('.input-lng-s');
let inputComp  = document.querySelector('.input-comp');
let textareaT  = document.querySelector('.textarea-t');




document.querySelector('.month-s').onchange=function (){getSelectValueS()};
document.querySelector('.year-s').onchange=function (){getSelectValueS()};
document.querySelector('.monthS-s').onchange=function (){getSelectValueS()};
document.querySelector('.yearS-s').onchange=function (){getSelectValueS()};

function getSelectValueS()
{
	let monthF_f  = document.querySelector('.month-s').value
	let yearF_f  = document.querySelector('.year-s').value
	let monthS_s  = document.querySelector('.monthS-s').value
	let yearS_s  = document.querySelector('.yearS-s').value
}

function addT() {

	if(inputLng.value === "" || inputComp.value === ""){
		inputLng.style.border = "1px solid red"
		inputComp.style.border = "1px solid red"
		return
	}
	numFour+=1
	document.querySelector(".four").innerHTML = 'Experiences'
		
	inputLng.style.border = "1px solid #EDEDED"
	inputComp.style.border = "1px solid #EDEDED"
	let lineTh = document.createElement('div');
	lineTh.classList.add('line-first');
	let flexColS = document.createElement('div');
	flexColS.classList.add('flex-col');
	let flexTh = document.createElement('div');
	flexTh.classList.add('flex-sec');
	let thOfEcS = document.createElement('p');
	thOfEcS.classList.add('th-of-ec');
	let intervalS = document.createElement('div');
	intervalS.classList.add('interval');
	let thatbody = document.createElement('div')
	thatbody.classList.add("new-body")

	let monthF_f  = document.querySelector('.month-s').value
	let yearF_f  = document.querySelector('.year-s').value
	let monthS_s  = document.querySelector('.monthS-s').value
	let yearS_s  = document.querySelector('.yearS-s').value


	outputS_s.appendChild(lineTh);
	lineTh.appendChild(flexColS);
	lineTh.appendChild(flexTh); 
	flexColS.appendChild(thOfEcS);
	flexColS.appendChild(intervalS);

	thOfEcS.textContent = inputLng.value;
	intervalS.textContent = `${inputComp.value}, ${yearF_f} ${monthF_f} - ${yearS_s} ${monthS_s}`
	thatbody.innerHTML+=`<div class = 'body-sec show-hide hides' style='background-color:#eaeaea;display:block;'><div class = 'content'><p class = 'title-input'>Job Title*</p><input type = 'text' class = 'desc-ss' value = ${inputLng.value} placeholder='e.g.Web Design'></div><div class = 'content'><p class = 'title-input'>Company*</p><input type = 'text' class = 'desc-tt' value=${inputComp.value} placeholder='e.g.Armenian State University'></div><div class = 'content' style = 'display: flex;'><div class = 'part-one' style='margin-right: 22px;'><p class = 'title-input'>Start Date</p><div class = 'flex-content'><select class='month-nn' ><option value='January'>January</option><option value='February'>February</option><option value='March'>March</option><option value='April'>April</option><option value='May'>May</option><option value='June'>June</option><option value='July'>July</option><option value='August'>August</option><option value='September'>September</option><option value='October'>October</option><option value='November'>November</option><option value='December'>December</option></select><select class='yearr' style = 'margin-left: 10px;'><option value='2021'>2021</option><option value='2020'>2020</option><option value='2019'>2019</option><option value='2018'>2018</option><option value='2017'>2017</option><option value='2016'>2016</option><option value='2015'>2015</option><option value='2014'>2014</option><option value='2013'>2013</option><option value='2012'>2012</option><option value='2011'>2011</option><option value='2010'>2010</option><option value='2009'>2009</option><option value='2008'>2008</option><option value='2007'>2007</option><option value='2006'>2006</option><option value='2005'>2005</option><option value='2004'>2004</option><option value='2003'>2003</option><option value='2002'>2002</option><option value='2001'>2001</option><option value='2000'>2000</option><option value='1999'>1999</option><option value='1998'>1998</option><option value='1997'>1997</option><option value='1996'>1996</option><option value='1995'>1995</option><option value='1994'>1994</option><option value='1993'>1993</option><option value='1992'>1992</option><option value='1991'>1991</option><option value='1990'>1990</option><option value='1989'>1989</option><option value='1988'>1988</option><option value='1987'>1987</option><option value='1986'>1986</option><option value='1985'>1985</option><option value='1984'>1984</option><option value='1983'>1983</option><option value='1982'>1982</option><option value='1981'>1981</option><option value='1980'>1980</option><option value='1979'>1979</option><option value='1978'>1978</option><option value='1977'>1977</option><option value='1976'>1976</option><option value='1975'>1975</option><option value='1974'>1974</option><option value='1973'>1973</option><option value='1972'>1972</option><option value='1971'>1971</option><option value='1970'>1970</option><option value='1969'>1969</option><option value='1968'>1968</option><option value='1967'>1967</option><option value='1966'>1966</option><option value='1965'>1965</option><option value='1964'>1964</option><option value='1963'>1963</option><option value='1962'>1962</option><option value='1961'>1961</option><option value='1960'>1960</option><option value='1959'>1959</option><option value='1958'>1958</option><option value='1957'>1957</option><option value='1956'>1956</option><option value='1955'>1955</option><option value='1954'>1954</option><option value='1953'>1953</option><option value='1952'>1952</option><option value='1951'>1951</option><option value='1950'>1950</option></select></div></div><div class = 'part-two'><p class = 'title-input'>End Date</p><div class = 'flex-content'><select class='monthSS-nn'><option value='January'>January</option><option value='February'>February</option><option value='March'>March</option><option value='April'>April</option><option value='May'>May</option><option value='June'>June</option><option value='July'>July</option><option value='August'>August</option><option value='September'>September</option><option value='October'>October</option><option value='November'>November</option><option value='December'>December</option></select> <select class='yearS-nn' style = 'margin-left: 10px;'><option value='2021'>2021</option><option value='2020'>2020</option><option value='2019'>2019</option><option value='2018'>2018</option><option value='2017'>2017</option><option value='2016'>2016</option><option value='2015'>2015</option><option value='2014'>2014</option><option value='2013'>2013</option><option value='2012'>2012</option><option value='2011'>2011</option><option value='2010'>2010</option><option value='2009'>2009</option><option value='2008'>2008</option><option value='2007'>2007</option><option value='2006'>2006</option><option value='2005'>2005</option><option value='2004'>2004</option><option value='2003'>2003</option><option value='2002'>2002</option><option value='2001'>2001</option><option value='2000'>2000</option><option value='1999'>1999</option><option value='1998'>1998</option><option value='1997'>1997</option><option value='1996'>1996</option><option value='1995'>1995</option><option value='1994'>1994</option><option value='1993'>1993</option><option value='1992'>1992</option><option value='1991'>1991</option><option value='1990'>1990</option><option value='1989'>1989</option><option value='1988'>1988</option><option value='1987'>1987</option><option value='1986'>1986</option><option value='1985'>1985</option><option value='1984'>1984</option><option value='1983'>1983</option><option value='1982'>1982</option><option value='1981'>1981</option><option value='1980'>1980</option><option value='1979'>1979</option><option value='1978'>1978</option><option value='1977'>1977</option><option value='1976'>1976</option><option value='1975'>1975</option><option value='1974'>1974</option><option value='1973'>1973</option><option value='1972'>1972</option><option value='1971'>1971</option><option value='1970'>1970</option><option value='1969'>1969</option><option value='1968'>1968</option><option value='1967'>1967</option><option value='1966'>1966</option><option value='1965'>1965</option><option value='1964'>1964</option><option value='1963'>1963</option><option value='1962'>1962</option><option value='1961'>1961</option><option value='1960'>1960</option><option value='1959'>1959</option><option value='1958'>1958</option><option value='1957'>1957</option><option value='1956'>1956</option><option value='1955'>1955</option><option value='1954'>1954</option><option value='1953'>1953</option><option value='1952'>1952</option><option value='1951'>1951</option><option value='1950'>1950</option></select></div></div></div><div class = 'content' style='padding-bottom:30px;'><p class = 'title-input'>Description</p><textarea class = 'textarea-ss'  type = 'text' placeholder='Write your text...' style='margin-top: 7px;height:67px;'>${textareaT.value}</textarea><div class = 'close-secondd'><i class='fa fa-trash' aria-hidden='true'></i><span class = 'del'>Delete</span></div><div class = 'check-secondd'><i class='fa fa-save' aria-hidden='true'></i><span class = 'save'>Save</span></div></div></div>`

	lineTh.appendChild(thatbody);

	flexTh.innerHTML = "<i class='fa fa-times-circle x' aria-hidden='true'></i><i class='fa fa-pencil pencil pen-one fff' aria-hidden='true'></i><i class='fa fa fa-bars handleF' aria-hidden='true'></i>"

	let fff = document.querySelectorAll(".fff")
	let ccc = document.querySelectorAll(".close-secondd")
			
		for(let c=0;c<fff.length;c++){
		fff[c].onclick = ()=>{
			// document.querySelectorAll(".new-body")[c].classList.toggle('new-body-none')
			$(".new-body").eq(c).slideToggle();	
				document.querySelectorAll(".line-first")[c+3].classList.toggle("line-first-toggle")
		}
		ccc[c].onclick = ()=>{
			document.querySelectorAll(".line-first")[c+3].remove()
		}
				document.querySelectorAll(".check-secondd")[c].onclick=()=>{
				document.querySelectorAll(".th-of-ec")[c].innerText = document.querySelectorAll(".desc-ss")[c].value
				document.querySelectorAll(".interval")[c].innerText = document.querySelectorAll(".desc-tt")[c].value + ", "
					
					let month_sh  = document.querySelectorAll('.month-nn')[c].value
					let yearr  = document.querySelectorAll('.yearr')[c].value
					let month_sSS  = document.querySelectorAll('.monthSS-nn')[c].value
					let yearSS  = document.querySelectorAll('.yearS-nn')[c].value
					let intervalS = document.querySelectorAll(".interval")
					intervalS[c].textContent += `${yearr} ${month_sh} - ${yearSS} ${month_sSS}`

				document.querySelectorAll(".line-first")[c+3].classList.toggle("line-first-toggle")

				$(".hides").eq(c).slideToggle();

				}
		}
		
		let cbn = document.querySelectorAll('.month_s-nn')
					
		for(let gg = 0; gg<cbn.length;gg++){
					document.querySelectorAll('.month_s-nn')[gg].value = document.querySelector('.month-s').value
					document.querySelectorAll('.yearr')[gg].value = document.querySelector('.year-s').value
					document.querySelectorAll('.month_sSS-nn')[gg].value = document.querySelector('.monthS-s').value
					document.querySelectorAll('.yearS-nn')[gg].value = document.querySelector('.yearS-s').value

		}
	

	
	$(".x").click(function(){
		let index = $(".x").index(this);
		$(".line-first").eq(index).hide();
		numFour-=1
	})
	
	inputLng.value = ""
	inputComp.value = ""
	textareaT.value = ""

	$(".month-s").val("January");
	$(".year-s").val("2021");
	$(".monthS-s").val("January");
	$(".yearS-s").val("2021");

	let playerF = document.querySelector(".body-mini-th");
	new Sortable(playerF,{
		handle:'.handleF',
		animation:200
	})
	showSecond.style.display = "none"

}

document.querySelector(".close-second").onclick = ()=>{
	inputS.value = ""
	descT.value = ""
	textareaS.value = ""
}


document.querySelector(".close-third").onclick = ()=>{
	inputLng.value = ""
	inputComp.value = ""
	textareaT.value = ""
}



document.querySelector(".close-four").onclick = ()=>{
	input.value = ""
}

let show = document.querySelector(".show-hide")
let showSecond = document.querySelector(".show-hide-second")
let showThird = document.querySelector(".show-hide-third")

document.querySelector(".skill-plus-sec").onclick = ()=>{
	show.style.display = "block"
}
document.querySelector(".close-second").onclick = () =>{
	show.style.display = "none"
}
document.querySelector(".skill-plus").onclick = ()=>{
	showSecond.style.display = "block"
}
document.querySelector(".skill-plus-th").onclick = ()=>{
	showThird.style.display = "block"
}

let vl = document.querySelectorAll(".vl")
let vlImg = document.querySelector("#file")
let endLinks = document.querySelectorAll(".end-links")


document.querySelector(".done").onclick = ()=>{

	for(let k=0;k<vl.length;k++){
		if(!vl[k].value){
			vl[k].style.border = "1px solid red"
			numSix = 0
			document.querySelector(".callout").style.animation = "move 1s forwards"
			setTimeout(()=>{
				document.querySelector(".callout").style.animation = ""
			},3000)
		}
		if(!vlImg.value){
			document.querySelector(".add-photo").style.border = "1px solid red"
			document.querySelector(".callout").style.animation = "move 1s forwards"
			setTimeout(()=>{
				document.querySelector(".callout").style.animation = ""
			},3000)
		}
		vlImg.oninput= ()=>{
			document.querySelector(".add-photo").style.border = "1px solid #AFAFAF"
			numFive +=1
		}
		vl[k].oninput = ()=>{
			vl[k].style.border = "1px solid #AFAFAF"
			numSix =1
		}
		if(numOne==0){
			document.querySelector(".first").innerHTML = 'Skills <span style = "color:red;">(Minimum one skill required)</span>'
			document.querySelector(".callout").style.animation = "move 1s forwards"
			setTimeout(()=>{
				document.querySelector(".callout").style.animation = ""
			},3000)
		}
		if(numTwo==0){
			document.querySelector(".second").innerHTML = 'Education <span style = "color:red;">(Minimum one Education required)</span>'
			document.querySelector(".callout").style.animation = "move 1s forwards"
			setTimeout(()=>{
				document.querySelector(".callout").style.animation = ""
			},3000)
		}
		if(numThree==0){
			document.querySelector(".third").innerHTML = 'Languages <span style = "color:red;">(Minimum one Language required)</span>'
			document.querySelector(".callout").style.animation = "move 1s forwards"
			setTimeout(()=>{
				document.querySelector(".callout").style.animation = ""
			},3000)
		}
		if(numFour==0){
			document.querySelector(".four").innerHTML = 'Experiences <span style = "color:red;">(Minimum one Experience required)</span>'
			document.querySelector(".callout").style.animation = "move 1s forwards"
			setTimeout(()=>{
				document.querySelector(".callout").style.animation = ""
			},3000)
		}
		for(m=0;m<endLinks.length;m++){
			
			if(!endLinks[0].value || !endLinks[1].value || !endLinks[2].value  || !endLinks[3].value || !endLinks[4].value || !endLinks[5].value){
				document.querySelector(".six").innerHTML = "Connection <span style = 'color:red;'>(Minimum one link required)</span>"
				
			}
			if(endLinks[0].value || endLinks[1].value || endLinks[2].value  || endLinks[3].value || endLinks[4].value || endLinks[5].value){
				document.querySelector(".six").innerHTML = "Connection"
				numFive+=1
			}
			endLinks[m].oninput = ()=>{
				document.querySelector(".six").innerHTML = "Connection"
			}
		}
	}
	
}