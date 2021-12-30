var baby = document.getElementById('age');
baby.addEventListener('keyup', function(){
    var babay = document.getElementById('age').value;
    if(isNaN(babay)){
            var wrong = document.createElement('h4');
            var textNode = document.createTextNode('Please Insert a Number');
            wrong.appendChild(textNode);
            console.log(wrong);
            var getit = document.getElementById('invalid-slot');
            getit.append(wrong);
            console.log(getit)
        
    }
})