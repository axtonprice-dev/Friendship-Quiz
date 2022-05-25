async function dataFunc() {
    try {
        const creation = await fetch(`modules/backend/data_endpoint.php?data=getJson&path=quiz-data/creation.json`)
        var quizdata = await creation.json();
        const questions = await fetch(`modules/backend/data_endpoint.php?data=getJson&path=quiz-data/questions.json`)
        var responsedata = await questions.json();

        const username = quizdata.user_name;

        document.getElementById("username").innerHTML = username;
        document.getElementById("username").innerHTML = username;
        console.log(creation);
        console.log(responsedata);

    } catch (err) {
        window.location.replace("../../500");
        return;
    }
}
dataFunc();

function saveState(){
    // const saveDataRequest = await fetch(`modules/backend/data_endpoint.php?data=saveJson&dataload=${encodeURIComponent()}`)
    // var responsedata = await saveDataRequest.json();
    console.log(`Auto-saved Quiz!`);
}

async function newQuestionTab() {
    const creation = await fetch(`modules/backend/data_endpoint.php?data=getJson&path=quiz-data/creation.json`)
    var quizdata = await creation.json();
    questionCounter++;

    function inWords(num) {
        var a = ['', 'one ', 'two ', 'three ', 'four ', 'five ', 'six ', 'seven ', 'eight ', 'nine ', 'ten ', 'eleven ', 'twelve ', 'thirteen ', 'fourteen ', 'fifteen ', 'sixteen ', 'seventeen ', 'eighteen ', 'nineteen '];
        var b = ['', '', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety'];
        if ((num = num.toString()).length > 9) return 'overflow';
        n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
        if (!n) return; var str = '';
        str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'crore ' : '';
        str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'lakh ' : '';
        str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'thousand ' : '';
        str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'hundred ' : '';
        str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) : '';
        return str;
    }

    if (questionCounter >= 11) {
        document.getElementById("newQuestionButton").innerHTML = `
            <a type="button" class="nav-link" style="background-color: #c25864; color:white" aria-selected="false" data-mdb-toggle="modal" data-mdb-target="#maxQuestionsModal">
                Max Questions!
            </a>`;
        saveState();
    } else {
        document.getElementById("v-pills-tab").innerHTML +=
            `<a class="nav-link" id="v-pills-${questionCounter}-tab" data-mdb-toggle="pill" href="#v-pills-${questionCounter}" role="tab" aria-controls="v-pills-${questionCounter}" aria-selected="false">Question ${questionCounter}</a>`

        document.getElementById("v-pills-tabContent").innerHTML +=
            `<div class="tab-pane fade" id="v-pills-${questionCounter}" role="tabpanel" aria-labelledby="v-pills-${questionCounter}-tab">${questionCounter} content</div>`;

        saveState();
    }

}

