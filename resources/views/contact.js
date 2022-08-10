document.getElementById('sendData').addEventListener('submit', handleSubmit);


        // A function/Method to send message through the contact form
        function handleSubmit (){
            // e.preventDefault();
            alert('working');
                    
            // let email = document.getElementById('email').value;
                      

            // fetch('https://ribiax.com/api/public/newsletter/subscribe', {
            //     method: 'POST',
            //     headers: {
            //         'Accept': 'application/json, text/plain, */*',
            //         'content-type': 'application/json'
            //     },
            //     body:JSON.stringify({email: email})
            // })
            // .then((res) => res.json())           
            // .then((data) => console.log(data),
            // localStorage.setItem('email', email))           
            // .then(
                
            //     (data) => Swal.fire({                   
            //         icon: 'success',
            //         title: 'Subscribed!!!',
            //         showConfirmButton: false,
            //         timer: 1500,
                    
            //       }) 
                           
            //     )
            //     let res = document.getElementById("subscribe");
            //     res.reset()
            //     .catch( error => {
            //         console.warn('Something went wrong.', error)
            //         res.reset();
            //     });
        }