function Calculate() {
    var L = document.getElementById("L").value; // Loan amount in $'s
    var i = document.getElementById("i").value; // interest rate %/year
    var n = document.getElementById("n").value; // # of compounding period months   

    var mp = (i * (1+i)^n * L) / ((1+i)^2 - 1);
/*     result.innerHTML = "Loan amount:      " + L.value;
    result.innerHTML = "Interest Rate:    " + i.value;
    result.innerHTML = "Number of Months: " + n.value; */
    return mp;
}

function display(mp) {
    var L = document.getElementById("L").value;
    var i = document.getElementById("i").value;
    var n = document.getElementById("n").value;
    var mp = (i * (1+i)^n * L) / ((1+i)^2 - 1);
    document.write("<p>Present Value  =  $" +L+ "</p>");
    document.write("<p>Interest Rate  =   " +i+ "</p>");
    document.write("<p>Num of Months  =  " +n+ "</p>");
    
    document.write('<table width="200" border ="1">');
    document.write("<tr><th>Month</th><th>Loan Remaining</th><th>Interest Paid</th></tr>");
    document.write("<tr>");
    var monthly = mp / n;
    var iMonthly = (((i / 100) / n) * L)
    document.write("<td>$" +monthly.toFixed(2)+ "</td>");
    document.write("<td>$" +mp.toFixed(2)+ "</td>");
    document.write("<td>$" +iMonthly.toFixed(2)+ "</td>");
    document.write("</tr>");
    document.write("</table>");
}