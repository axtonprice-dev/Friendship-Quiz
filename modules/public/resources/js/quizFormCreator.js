async function dataFunc() {
    try {
        const creation = await fetch(`modules/backend/data_endpoint.php?data=getJson&path=quiz-data/creation.json`)
        var quizdata = await creation.json();
        const questions = await fetch(`modules/backend/data_endpoint.php?data=getJson&path=quiz-data/questions.json`)
        var responsedata = await questions.json();
        const username = quizdata.user_name;

        document.getElementById("username").innerHTML = username;
        document.getElementById("v-pills-tabContent").innerHTML =
            `<div class="tab-pane fade active show" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                <form>
                    <h4 class="mt-2">
                        <textarea class="no-outline" id="quizQuestion-1">${responsedata[0].title}</textarea>
                    </h4>
                    <div id="question-inputs-q1"></div>
                </form>
            </div>`;
        Object.entries(responsedata[0].options).forEach(([key, value]) => {
            // console.log(`${key} ${value}`); // item1 Tacos
            if (responsedata[0].answerkey === key) {
                document.getElementById("question-inputs-q1").innerHTML +=
                    `<div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked />
                        <label class="form-check-label" for="flexRadioDefault1">
                            <input type="text" id="v-pills-1-input-1" class="form-control" value="${value}" />
                        </label>
                    </div>`;
            } else {
                document.getElementById("question-inputs-q1").innerHTML +=
                    `<div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                        <label class="form-check-label" for="flexRadioDefault1">
                            <input type="text" id="v-pills-1-input-1" class="form-control" value="${value}" />
                        </label>
                    </div>`;
            }

        });

    } catch (err) {
        // window.location.replace("../../500");
        console.log(err);
        return;
    }
}
dataFunc();

function saveState() {
    // var values = `${}`;
    // const saveDataRequest = await fetch(`modules/backend/data_endpoint.php?data=saveJson&dataload=${encodeURIComponent(values)}`)
    // var responsedata = await saveDataRequest.json();
    console.log(`✅ Auto-saved Quiz!`);
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
        document.getElementById("newQuestionButton").innerHTML = `<a type="button" class="nav-link" style="background-color: #c25864; color:white" aria-selected="false" data-mdb-toggle="modal" data-mdb-target="#maxQuestionsModal">Max Questions!</a>`;
        saveState();
    } else {
        document.getElementById("v-pills-tab").innerHTML += `<a class="nav-link" id="v-pills-${questionCounter}-tab" data-mdb-toggle="pill" href="#v-pills-${questionCounter}" role="tab" aria-controls="v-pills-${questionCounter}" aria-selected="false">Question ${questionCounter}</a>`;
        const questions = await fetch(`modules/backend/data_endpoint.php?data=getJson&path=quiz-data/questions.json`)
        var quizQuestionData = await questions.json();
        var indexCounter = questionCounter - 1;
        // console.log(quizQuestionData);
        // console.log(quizQuestionData[indexCounter].options.item1);
        // console.log(quizQuestionData[indexCounter].title);
        document.getElementById("v-pills-tabContent").innerHTML +=
            `<div class="tab-pane fade" id="v-pills-${questionCounter}" role="tabpanel" aria-labelledby="v-pills-${questionCounter}-tab">
                <form>
                    <h4 class="mt-2">
                        <textarea class="no-outline" id="quizQuestion-${questionCounter}">${quizQuestionData[indexCounter].title}</textarea>
                    </h4>
                    <div id="question-inputs-q${questionCounter}"></div>
                </form>
            </div>`;

        Object.entries(quizQuestionData[indexCounter].options).forEach(([key, value]) => {
            // console.log(`${key} ${value}`); // item1 Tacos
            if (quizQuestionData[indexCounter].answerkey === key) {
                document.getElementById(`question-inputs-q${questionCounter}`).innerHTML +=
                    `<div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked />
                            <label class="form-check-label" for="flexRadioDefault1">
                                <input type="text" id="v-pills-1-input-1" class="form-control" value="${value}" />
                            </label>
                        </div>`;
            } else {
                document.getElementById(`question-inputs-q${questionCounter}`).innerHTML +=
                    `<div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                            <label class="form-check-label" for="flexRadioDefault1">
                                <input type="text" id="v-pills-1-input-1" class="form-control" value="${value}" />
                            </label>
                        </div>`;
            }

        });

        saveState();
    }

}