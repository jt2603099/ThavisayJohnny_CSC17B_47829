const form =  {
  surveyName: document.getElementById('surveyName'),
  surveyDescription: document.getElementById('surveyDescription'),
  answer1: document.getElementById('Answer1'),
  answer2: document.getElementById('Answer2'),
  answer3: document.getElementById('Answer3'),
  messages: document.getElementById('form-messages'),
  submit: document.getElementById('btn-submit')

};

form.submit.addEventListener('click', () => {

    const request = new XMLHttpRequest();

    request.onload = () => {
        let responseObject = null;

        try {
            responseObject = JSON.parse(request.responseText);
        } catch (e) {
            console.error('Could not parse JSON!');
        }

        if (responseObject) {
            handleResponse(responseObject);
        }
    };

    const requestData = `surveyName=${form.surveyName.value}&surveyDescription=${form.surveyDescription.value}&answer1=${form.answer1.value}&answer2=${form.answer2.value}&answer3=${form.answer3.value}`;
    
    console.log(requestData);

    request.open('post', 'check-login.php');
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    request.send(requestData);
});

function handleResponse(responseObject) {
    if (responseObject.ok) {

    } else {
        while (form.messages.firstChild) {
            form.messages.removeChild(form.messages.firstChild);
        }
        responseObject.messages.forEach((message) => {
            const li = document.createElement('li');
            li.textContent = message;
            form.messages.appendChild(li);
        });
    }
}