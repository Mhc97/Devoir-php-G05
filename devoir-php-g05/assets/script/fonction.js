export function switchCurrency(button, cur1, cur2,in1,in2) {


    button.addEventListener("click", (e) => {

        e.preventDefault();

        [cur1.innerHTML, cur2.innerHTML] = [cur2.innerHTML, cur1.innerHTML];
        [cur1.dataset.devise, cur2.dataset.devise] = [cur2.dataset.devise, cur1.dataset.devise];
        
        
        in1.value = cur1.dataset.devise;
        in2.value = cur2.dataset.devise;

    })


}