//<script type="text/javascript" src="game_functions.js"></script>

let scores = [
    {name: "Player 1", moves: 0},
    {name: "Player 2", moves: 0},
    {name: "Player 3", moves: 0},
    {name: "Player 4", moves: 0},
    {name: "Player 5", moves: 0},
];

function updateLeaderboardView() {
    let leaderboard = document.getElementById("leaderboard");
    leaderboard.innerHTML = "";

    scores.sort(function(a, b){ return b.score - a.score  });
    let elements = []; 
    // create elements for each player
    for(let i = 0; i < scores.length; i++) {
        let name = document.createElement("div");
        let moves = document.createElement("div");
        name.classList.add("name");
        moves.classList.add("moves");
        name.innerText = scores[i].name;
        moves.innerText = scores[i].moves;

        let scoreRow = document.createElement("div");
        scoreRow.classList.add("row");
        scoreRow.appendChild(name);
        scoreRow.appendChild(moves);
        leaderboard.appendChild(scoreRow);

        elements.push(scoreRow);

    }

    let colors = ["gold", "silver", "#cd7f32"];
    for(let i=0; i < 3; i++) {
        elements[i].style.color = colors[i];
    }
}

updateLeaderboardView();

function randomize() {
    for(var i=0; i<scores.length; i++) {
        scores[i].score = Math.floor(Math.random() * (600 - 300 + 1)) + 300;
    }
    // when your data changes, call updateLeaderboardView
    updateLeaderboardView();
}