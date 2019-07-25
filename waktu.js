	function showTime() {
		    var a_p = "";
		    var today = new Date();
		    var curr_hour = today.getHours();
		    var curr_minute = today.getMinutes();
		    var curr_second = today.getSeconds();
		    if (curr_hour < 12) {
		        a_p = "AM";//penunjukkan jam pada pagi hari
		    } else {
		        a_p = "PM";//penunjukkan jam pada malam hari
		    }
		    if (curr_hour == 0) {
		        curr_hour = 12;//perulangan pada perhitungan jam
		    }
		    if (curr_hour > 12) {//perulangan pada perhitungan dari 12 jam kje 12 lagi
		        curr_hour = curr_hour - 12;
		    }
		    curr_hour = checkTime(curr_hour);//pengecekan per jam
		    curr_minute = checkTime(curr_minute);//pengecekan per menit
		    curr_second = checkTime(curr_second);//pengecekan per detik
		 document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;//penambahan rumus yg diatas
		    }
 
		function checkTime(i) {
		    if (i < 10) {
		        i = "0" + i;
		    }
		    return i;
		}
		setInterval(showTime, 500);