<?php

function Calculate() {
    $L = document.getElementById("L").value; // Loan amount in $'s
    $i = document.getElementById("i").value; // interest rate %/year
    $n = document.getElementById("n").value; // # of compounding period months   

    $mp = ($i * (1+$i)^$n * $L) / ((1+$i)^2 - 1);
/*     result.innerHTML = "Loan amount:      " + L.value;
    result.innerHTML = "Interest Rate:    " + i.value;
    result.innerHTML = "Number of Months: " + n.value; */
    return $mp;
}

function display($mp) {
    $L = document.getElementById("L").value;
    $i = document.getElementById("i").value;
    $n = document.getElementById("n").value;
    $mp = ($i * (1+$i)^$n * $L) / ((1+$i)^2 - 1);
    echo("<p>Present Value  =  $" +L+ "</p>");
    echo("<p>Interest Rate  =   " +i+ "</p>");
    echo("<p>Num of Months  =  " +n+ "</p>");
    
    echo('<table width="200" border ="1">');
    echo("<tr><th>Month</th><th>Loan Remaining</th><th>Interest Paid</th></tr>");
    echo("<tr>");
    $monthly = $mp / $n;
    $iMonthly = ((($i / 100) / $n) * $L);
    echo "<td>$" .number_format($monthly, 2, '.', ''). "</td>";
    echo "<td>$" .number_format($L, 2,'.', ''). "</td>";
    echo "<td>$" .number_format($monthly, 2, '.', ''). "</td>";
    echo "</tr>";
    echo "</table>";
}
?>