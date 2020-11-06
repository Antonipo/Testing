
function suma(){
        let n1=Number(document.getElementById('continua').value);
        let n2=Number(document.getElementById('parcial1').value);
        let n3=Number(document.getElementById('parcial2').value);
        let n4=Number(document.getElementById('parcial3').value);
        let n5=Number(document.getElementById('final').value);
        let sol=(n1*0.2)+(n3*0.2)+(n4*0.2)+(n2*0.1)+(n5*0.3);
        document.getElementById('res').value=sol;
        }

function nuevo(){
        let nada="";
        document.getElementById('continua').value=nada;
        document.getElementById('parcial1').value=nada;
        document.getElementById('parcial2').value=nada;
        document.getElementById('parcial3').value=nada;
        document.getElementById('final').value=nada;
        document.getElementById('res').value=nada;
        }



