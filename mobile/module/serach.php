<?
include $ROOT."/module/stock_list.php";
?>
<script>
	var 검색어,ref,addrList;

	var addrList=[<?=$stock_list?>];
	var fword;
	var 초성 = Array('ㄱ', 'ㄲ', 'ㄴ', 'ㄷ', 'ㄸ', 'ㄹ', 'ㅁ', 'ㅂ', 'ㅃ', 'ㅅ', 'ㅆ', 'ㅇ', 'ㅈ', 'ㅉ', 'ㅊ', 'ㅋ', 'ㅌ', 'ㅍ', 'ㅎ');//,'0','1','2','3','4','5','6','7','8','9');
	var 중성 = Array('ㅏ', 'ㅐ', 'ㅑ', 'ㅒ', 'ㅓ', 'ㅔ', 'ㅕ', 'ㅖ', 'ㅗ', 'ㅘ', 'ㅙ', 'ㅚ', 'ㅛ', 'ㅜ', 'ㅝ', 'ㅞ', 'ㅟ', 'ㅠ', 'ㅡ', 'ㅢ', 'ㅣ');
	var 종성 = Array('', 'ㄱ', 'ㄲ', 'ㄳ', 'ㄴ', 'ㄵ', 'ㄶ', 'ㄷ', 'ㄹ', 'ㄺ', 'ㄻ', 'ㄼ', 'ㄽ', 'ㄾ', 'ㄿ', 'ㅀ', 'ㅁ', 'ㅂ', 'ㅄ', 'ㅅ', 'ㅆ', 'ㅇ', 'ㅈ', 'ㅊ', 'ㅋ', 'ㅌ', 'ㅍ', 'ㅎ');

	function runS(tarr, sword) {
		var result = "";
		
		if(Math.round(sword)==sword){
			

			forLength     = tarr.length;
			sworldLength  = sword.length;
			
			if(sworldLength >=3){
				for (var i = 0; i < forLength; i++) { 

				
					arrStr = tarr[i].substring(0,sworldLength);

					if(i>1600 && i<1610){
					//	alert(sword+"===="+arrStr+"===="+tarr[i]);
					}
					if(sword ==arrStr){
						result += arrStr + ",";
					}

				}
			}

		}else{


			for ( k = 0; k < sword.length; k++) {
				
				var 검색어2 = sword.substring(k, k + 1);
				
				var 초성검색어 = 초성뽑기(검색어2.charCodeAt(0));
					
				var forLength = 0;
				
				var checkArr = result.split(",");
				
				var arrStr = "";
				
				
				if (result == "" && k == 0) { //최초 조회시... 
					forLength = tarr.length;
				} else {                      //두번째 조회 부터...
					forLength = checkArr.length;
					result = "";
				}

				for (var i = 0; i < forLength; i++) {  // 비교대상 배열의 길이만큼 반복 - [2]반복문
					 
					if (k == 0) {  //최초 조회시... 
						arrStr = tarr[i];
					} else {     //두번째 조회 부터...
						arrStr = checkArr[i];
					}

					//배열 값의 길이만큼 반복 - [3]반복문 
					//단, j는 [1]반복문의 현재값으로 초기화 

					for ( j = k; j < arrStr.length; j++) {
						
						//이전 검색된 문자
						var 대상문자열 = arrStr.charCodeAt(j);
						var 대상초성 = 초성뽑기(arrStr.charCodeAt(j));
						var 입력단어 = 검색어2;

						if (k > 0) {
							대상문자열 = arrStr.charCodeAt(j - 1);
							대상초성 = 초성뽑기(arrStr.charCodeAt(j - 1));
							입력단어 = sword.substring(k - 1, k);

						}

						//한글이면
						if (escape(검색어2.charCodeAt(0)).length > 4 && result.indexOf(arrStr) < 0) {
							var Cho = 초성뽑기(arrStr.charCodeAt(j)); //조회 대상 배열의 값 초성 나누기	
							//초성만 입력한 경우이면..
							if (초성검색어 >= 0 ) {
								if (arrStr.charCodeAt(j) == 검색어2.charCodeAt(0)) {
									if (초성[대상초성] == 입력단어 || 대상문자열 == 입력단어.charCodeAt(0)) {
										result += arrStr + ",";
									}
								}
							} else {  //초성인 경우...
								if (초성[Cho] == 검색어2) {
									if (초성[대상초성] == 입력단어 || 대상문자열 == 입력단어.charCodeAt(0)) {
										result += arrStr + ",";
									}
								}
							}
						//영어면
						} else {
							//대문자로 변환뒤 비교
							if (검색어2.toUpperCase().charCodeAt(0) == arrStr.toUpperCase().charCodeAt(j)) {
								if (result.indexOf(arrStr) < 0) {
									result += arrStr + ",";
								}
							}
						}
					}
				}
			}
		}

		if (result == "") {
				result = "검색된 단어가 없습니다.";
		}
		fword = '';
		fword = result.split(',');
		fword.pop();


	}

	function 초성뽑기(str) {
		한글 = str - 0xAC00;
		var 종성 = 한글 % 28;
		var 중성 = ((한글 - 종성 ) / 28) % 21;
		var 초성 = parseInt(((한글 - 종성) / 28) / 21);
		return 초성;
	}




	$(document).ready(function() {

		eventSearch = function(){
			if (event.keyCode == 13) {
				var  input_value = document.getElementById('Search_code').value;
					document.getElementById('stock_search_v').style.display="none";
				if(Math.round(input_value)==input_value && input_value.length==6){
					if($("#s0").attr('alt')){
						chang_code3($("#s0").attr('alt'));
					}
				}else{
					if($("#s0").attr('alt')){
						chang_code3($("#s0").attr('alt'));
					}
				
				}
			}
			else if (event.keyCode == 27) {
				document.getElementById('stock_search_v').style.display="none";
				document.getElementById('Search_code').value = document.getElementById('Sname').value;
			}
			else
			{


				$('#stock_search_id').empty();
				var sword = $("#Search_code").val();
					sword = sword.toUpperCase();
					
				//sword = sword1.replace(/0/g,"!");
				//sword = sword1.replace("0","!");
			
			
				 document.getElementById('stock_search_v').style.display="";
				 $('#stock_search_id').append("<?=$SHostory ?>");

				if(sword.length>=1){
				
					$('#stock_search_id').empty();
					//$('#stock_search_list').style.display="";
					
					if (sword != '' ) {
						runS(tarr, sword);
						if (!fword[0])
							$('#stock_search_id').append('<li>일치하는 종목이 없습니다</li>');
						for (var ii in fword) {
							for (var rr in addrList) {
								if (addrList[rr][0] == fword[ii]) {
									$('#stock_search_id').append("<li id=\"s"+ii+"\" alt=\""+addrList[rr][3]+"|"+addrList[rr][2]+"|"+addrList[rr][1]+"\" onclick=\"chang_code3('"+addrList[rr][3]+"|"+addrList[rr][2]+"|"+addrList[rr][1]+"')\" style='cursor:pointer;'  >"+ addrList[rr][3] +"</li>");
								};
							};
						};
					} else {
						alert('검색할 단어를 입력하셔야죠!');
					};
				}else if(sword.length==1){
					$('#stock_search_id').empty();
					$('#stock_search_id').append("");

				}else if(sword.length==0){
					//document.getElementById('stock_search_v').style.display="";
					//$('#stock_search_id').append("<?=$SHostory ?>");
					document.getElementById('stock_search_v').style.display="none";
					//document.getElementById('Search_code').value = document.getElementById('Sname').value;
				}
			}
		}

		$("input").focus(function() {
			$('#stock_search_id').empty();
		});


		$("#Search_code").on("keypress", eventSearch);
		$("#Search_code").on("keyup"   , eventSearch);

	});


</script>
