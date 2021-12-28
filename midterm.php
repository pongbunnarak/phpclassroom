<?php
  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);

echo"<body>";
echo"<center>";
  
    echo "<table border='1'>";
    echo"<caption>";
    echo "<h3>";
    echo "<p>";
    echo "รายงานสถานการโควิด-19 แยกจังหวัด";
    echo "</p>";
    echo "</h3>";
    echo"</caption>";
    echo "<tr align = 'center'>";
    echo "<td bgcolor='#BEBEBE'>"; 
    echo "ลำดับ";
    echo "</td>"; 
    echo "<td bgcolor='#D3D3D3'>"; 
    echo "จังหวัด";
    echo "</td>";
    echo "<td bgcolor='#6A5ACD'>"; 
    echo "ผู้ป่วยใหม่";
    echo "</td>"; 
    echo "<td bgcolor='#7B68EE'>"; 
    echo "ผู้ป่วยรวม";
    echo "</td>"; 
    echo "<td bgcolor='#D3D3D3'>"; 
    echo "ผู้ป่วยใหม่ในประเทศ";
    echo "</td>"; 
    echo "<td bgcolor='#D3D3D3'>"; 
    echo "ผู้ป่วยรวมในประเทศ";
    echo "</td>"; 
    echo "<td bgcolor='#E9967A'>"; 
    echo "ผู้เสียชีวิตใหม่";
    echo "</td>"; 
    echo "<td bgcolor='#FA8072'>"; 
    echo "ผู้เสียชีวิตรวม";
    echo "</td>";
    echo "<td bgcolor='#BEBEBE'>"; 
    echo "วันที่อัพเดท";
    echo "</td>";  
    echo "</tr>";

foreach($data as $key=>$val){
    echo "<tr align = 'center'>";
    echo "<tr align = 'center'>";
    echo "<td bgcolor='#BEBEBE'>"; 
    echo $key+1;
    echo "</td>"; 
    echo "<td bgcolor='#FFFAF0'>"; 
    echo $val->province;
    echo "</td>";
    echo "<td bgcolor='#6A5ACD'>"; 
    echo $val->new_case;
    echo "</td>";
    echo "<td bgcolor='#7B68EE'>"; 
    echo $val->total_case;
    echo "</td>";
    echo "<td bgcolor#D3D3D3'>"; 
    echo $val->new_case_excludeabroad;
    echo "</td>";
    echo "<td bgcolor='#D3D3D3'>"; 
    echo $val->total_case_excludeabroad;
    echo "</td>";
    echo "<td bgcolor='#E9967A'>"; 
    echo $val->new_death;
    echo "</td>";
    echo "<td bgcolor='#FA8072'>"; 
    echo $val->total_death;
    echo "</td>"; 
    echo "<td bgcolor='#BEBEBE'>"; 
    echo $val->update_date;
    echo "</td>";
    echo "</tr>";

  }
  echo "</table>";

echo"</center>";
echo"</body>";
