const app = document.getElementById('app');
const form = document.getElementById('form-id');
const buttonAdd = document.getElementById('buttonAdd');

let count = 1;
let countR = 1;


function makeInput(count) {
    
    const container = document.createElement('div');
    container.setAttribute('id', `cnt-${count}`);
    container.className = 'container-class';

    const leftDiv = document.createElement('div');
    leftDiv.className = 'left-div';

    const rightDiv = document.createElement('div');
    rightDiv.className = 'right-div';

    const inputElement = `<input id="inp-left-one-${count}"> <input id="inp-left-two-${count}"> <br /> 
    <button type="button" id="del-${count}" class="btn-style-all">Delete</button>`;
    leftDiv.innerHTML = inputElement;

    container.append(leftDiv);
    container.append(rightDiv);
    form.append(container);

   document.getElementById(`del-${count}`).addEventListener('click', () => {
        const form = document.getElementById('form-id');
        const container = document.getElementById(`cnt-${count}`);
        form.removeChild(container);
        count--;
    });

    const addNumDiv = document.createElement('div');
    const buttonAddNum = document.createElement('button');
    buttonAddNum.innerText = 'Add Number';
    buttonAddNum.className = "btn-style-all";
    buttonAddNum.type = 'button';

    addNumDiv.append(buttonAddNum);
    rightDiv.append(addNumDiv);

    function addNumber(countR) {
        const rightContainer = document.createElement('div');
        const inputRightOne = document.createElement('input');
        const inputRightTwo = document.createElement('input');
        const delRightBtn = document.createElement('button');

        delRightBtn.className = "btn-style-all";
        delRightBtn.innerText = 'Delete';

        rightContainer.append(inputRightOne);
        rightContainer.append(inputRightTwo);
        rightContainer.append(delRightBtn);
        rightDiv.append(rightContainer);

        rightContainer.id = 'r-c' + countR;
        inputRightOne.id = countR;
        inputRightTwo.id = countR;
        delRightBtn.id = 'del-right' + countR;

        document.getElementById('del-right' + countR).addEventListener('click', () => {
            const container = document.getElementById('r-c' + countR);
            rightDiv.removeChild(container);
        });
    }


    buttonAddNum.addEventListener('click', () => {
        addNumber(countR++);
    });

}


buttonAdd.addEventListener('click' , () => {
    makeInput(count++);
});












