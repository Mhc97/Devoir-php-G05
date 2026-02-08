export function switchCurrency(form, cur1, cur2) {


    form.addEventListener("submit", (e) => {

        e.preventDefault();

        [cur1.innerHTML, cur2.innerHTML] = [cur2.innerHTML, cur1.innerHTML];
        [cur1.dataset.devise, cur2.dataset.devise] = [cur2.dataset.devise, cur1.dataset.devise];


    })


}


export function getCurrency(form, cur1, cur2, result) {


    form.addEventListener("submit", async function (e) {

        e.preventDefault();

        let input = form.querySelector("input");

        input = input.value;

        try {

            let response = await fetch(`https://cdn.jsdelivr.net/npm/@fawazahmed0/currency-api@latest/v1/currencies/${cur1.dataset.devise}.json`)

            let data = await response.json();

            let value = data[cur1.dataset.devise][cur2.dataset.devise];

            let date = new Date(data.date);
            
            
            
            result.innerHTML =`<p> ${value*input} </p> <p>Date de mise a jour: ${date.toLocaleDateString("fr")} </p>`;
            


        } catch {

            console.log("error");

        }

    })


}