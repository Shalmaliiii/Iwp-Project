slot_url = "https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/calendarByDistrict?district_id="
date_url = "&date="
dist_url = "https://cdn-api.co-vin.in/api/v2/admin/location/districts/" 

function fillColor(cell1, cell2){
    // cell1.style.backgroundColor = (cell1.innerHTML==0)? "rgb(255, 206, 206)":"rgb(30, 136, 115)";
    // cell2.style.backgroundColor = (cell2.innerHTML==0)? "rgb(255, 206, 206)": "rgb(30, 136, 115)";
    cell1.style.backgroundColor = (cell1.innerHTML==0)? "rgb(98, 44, 40,0.5)":"rgb(31, 48, 45)";
    cell2.style.backgroundColor = (cell2.innerHTML==0)? "rgb(98, 44, 40,0.5)": "rgb(31, 48, 45)";
}
 
function validSlots(sessions,date){
    var store = [], k = 0;
    for(var j=0; j<sessions.length; j++){
        if (sessions[j].date == date){
            store[k] = sessions[j];
            k++;
        } 
    }
    return store;
}

function slotTime(data){
    var str = "";
    for(var v=0;  v<data.length; v++){
        str += data[v] + "<br>";
    }
    return str;
}

function areSlots(len){
    if (len == 0){
        document.getElementById('NoCenter').innerHTML = "Sorry, no available slot found!";
        return;
    }
}

function fillDatainTable(data,date){
    const table = document.getElementById('tableDist').getElementsByTagName('tbody')[0];
    const DateSpecification = document.getElementById('DateSpecification').value;
    table.innerHTML = "";
    document.getElementById('NoCenter').innerHTML = "";
    areSlots(data.centers.length); 

    for(var i=0; i<data.centers.length; i++){
        var name =  `${data.centers[i].name}<br>${data.centers[i].block_name}`, 
        add =  data.centers[i].address, 
        pin =  data.centers[i].pincode 
        feetype = data.centers[i].fee_type;{
            if (name == "") name = "-"; if (add == "") add =  "-"; 
            else add = add + "<br>Pincode - " + pin; 
        }

        if (DateSpecification == 1) {
            var sessions = data.centers[i].sessions;
        }else{
            var sessions = validSlots(data.centers[i].sessions,date);
            if (sessions.length == 0){
                return;
            }
        }
        let row = table.insertRow();
        var arr = [i+1, name, add, feetype, sessions];
        for (var j=0; j<arr.length; j++){
            isblank = false;
            if (j==3 && arr[j]=="Paid"){
                var cell = row.insertCell(j);
                str = "<strong>Paid</strong><br>";
                if (data.centers[i].vaccine_fees){
                    for (var v=0; v<data.centers[i].vaccine_fees.length; v++){
                        str +=  "<br>" + data.centers[i].vaccine_fees[v].vaccine + "<br> Rs "+ data.centers[i].vaccine_fees[v].fee + "/-<br>"; 
                    }
                }
                cell.innerHTML = str;
                cell.rowSpan = parseInt(sessions.length,10);
            }
            else{
                if(j!=4) {
                    var cell = row.insertCell(j);
                    cell.innerHTML = arr[j];
                    cell.rowSpan = parseInt(sessions.length,10);
                }
                else{
                    var cell1 = row.insertCell(j);
                    var cell2 = row.insertCell(j+1);
                    cell1.innerHTML = sessions[0].available_capacity_dose1;
                    cell2.innerHTML = sessions[0].available_capacity_dose2;
                    row.insertCell(j+2).innerHTML = sessions[0].vaccine;
                    row.insertCell(j+3).innerHTML = sessions[0].date;
                    fillColor(cell1,cell2);
                    for(var k = 1; k<sessions.length; k++){
                        row = table.insertRow(); 
                        var cell1 = row.insertCell(0), cell2 = row.insertCell(1);
                        cell1.innerHTML = sessions[k].available_capacity_dose1;
                        cell2.innerHTML = sessions[k].available_capacity_dose2;
                        row.insertCell(2).innerHTML = sessions[k].vaccine;
                        row.insertCell(3).innerHTML = sessions[k].date;
                        // row.insertCell(4).innerHTML = slotTime(sessions[k].slots);
                        fillColor(cell1,cell2);
                    }
                }
            }
        }
    }
}

async function SlotByDistrict(dId,date){
    const response = await fetch(slot_url + dId + date_url + date);
    const data = await response.json();
    fillDatainTable(data,date); 
}

async function districtData(sval,dval,date){
    const response = await fetch(dist_url+sval);
    const data  = await response.json();
    var id = 0;
    for (var i = 0; i < data.districts.length; i++) {
        if (dval.includes(data.districts[i].district_name)) {
            id = data.districts[i].district_id;
            break;
        }
    }
    SlotByDistrict(id,date);
}

function getdistrict(){
    const dis = document.getElementById('dist');
    const state = document.getElementById('states');
    const D_val = dis.options[dis.selectedIndex].value;
    const S_val = state.options[state.selectedIndex].value;
    var date = document.getElementById('date').value;
    var clear = document.getElementById('NoCenter');
    clear.innerHTML = "";

    if (S_val == 0) {
        alert("Choose State!"); return;
    }else if (D_val == 0){
        alert("Choose District!"); return;
    }else if (date == ""){
        alert("Choose Date!"); return;
    } 
    
    var split_date = date.split("-");
    var date = split_date[2] + "-" + split_date[1] + "-" + split_date[0];
    districtData(S_val, D_val, date);
}