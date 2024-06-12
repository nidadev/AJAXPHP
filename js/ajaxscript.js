//ajax request for retreive data
let tobody = document.getElementById('tbody');
function showdata()
{
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "retrieve.php", true);
    xhr.responseType = "json";
    xhr.onload= () => {
        if(xhr.status === 200)
            {
                //console.log(xhr.response);
                if(xhr.response)
                    {
                        x = xhr.response;
                    }
                    else
                    {
                        x = "";
                    }
                    let sumval = 0;
                    for(i=0; i<x.length; i++)
                        {
                            tvalue = (x[i].quantity) * (x[i].price);
                            sumval += tvalue;
                            tobody.innerHTML += "<tr><td>" + x[i].id + "</td><td>" + x[i].name + "</td><td>" + x[i].quantity + "</td><td>" + x[i].price + "</td><td>" + x[i].date + "</td><td>" + tvalue + "</td></tr><tr>" + sumval + "</tr>" ;
                        }
            }
            else
            {
                console.log("Problem occur");
            }
    }
    xhr.send();
}
showdata();
//ajax request for inserting data

document.getElementById("btnAdd").addEventListener("click", add_product);

function add_product(e)
{
    e.preventDefault();
    console.log("Add button click");
    let name = document.getElementById("nameid").value;
    let quantity = document.getElementById("quantityid").value;
    let price = document.getElementById("priceid").value;

    let date = document.getElementById("dateid").value;

    //console.log(em);

    // creating XHR object
    const xhr = new XMLHttpRequest();
    //Initialize
    xhr.open("POST", "insert.php", true);
    //set request header
    xhr.setRequestHeader("Content-Type","application/json");

    //Handle response
    xhr.onload = () => {
        if(xhr.status === 200)
            {
              // response handling code.
              //console.log(xhr.status);
              //console.log(xhr.responseText);
              document.getElementById('msg').innerHTML = 
              '<div class="alert alert-dark mt-3 role=alert">' + xhr.responseText + '</div>';
              document.getElementById("formid").reset();
            }
            else
            {
                console.log("Problem occur");
            }

    }
    //JSON
    const mydata = { name : name, quantity: quantity, price: price, date: date }
    //console.log(mydata);
    //convert json to json string
    const data = JSON.stringify(mydata);
    console.log(data);
    
    //send req
    xhr.send(data)

}