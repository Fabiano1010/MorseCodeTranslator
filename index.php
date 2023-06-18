<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alfabet morsa</title>
    <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <center>
        <div class="card">
            <div class="card__inner">
                <div class="card__face card__face--front">
                    <div class="card__text" id="text">
                        <form action="index.php" method="POST">
                            <div class="data-box">
                                <input type="text" required name='word' autocomplete="off">
                                <label for="word">Word</label>
                                <button class="btn" type="submit" name="wordbtn">Translate</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card__face card__face--back">
                    <div class="card__text" id="text">
                        <form action="index.php" method="POST">
                            <div class="data-box">
                                <input type="text" required name='code' autocomplete="off">
                                <label for="word">Code (• or — or #)</label>
                                <button class="btn" type="submit" name="wordbtn">Translate</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
        <div class=" switch_button_div">
            <button class="btn switch_button">
                switch
            </button>
            <form action="">
                <button class="btn3 delete" id="delete" type="subit">
                    &times;
                </button>
            </form>
        </div>

        <?php
        require "./morse.php";
        $morse = [
            "A" => "• —",
            "B" => "— • • •",
            "C" => "— • — •",
            "D" => "— • •",
            "E" => "•",
            "F" => "• • — •",
            "G" => "— — •",
            "H" => "• • • •",
            "I" => "• •",
            "J" => "• — — —",
            "K" => "— • —",
            "L" => "• — • •",
            "M" => "— —",
            "N" => "— •",
            "O" => "— — —",
            "P" => "• — — •",
            "Q" => "— — • —",
            "R" => "• — •",
            "S" => "• • •",
            "T" => "—",
            "U" => "• • —",
            "V" => "• • • —",
            "W" => "• — —",
            "X" => "— • • —",
            "Y" => "— • — —",
            "Z" => "— — • •",
            "Ą" => "• — • —",
            "Ć" => "— • — • •",
            "Ę" => "• • — • •",
            "é" => "• • — • •",
            "Ł" => "• — • • —",
            "Ń" => "— — • — —",
            "Ó" => "— — — •",
            "Ś" => "• • • — • • •",
            "Ż" => "— — • • — •",
            "Ź" => "— — • • —",
            1 => "• — — — —",
            2 => "• • — — —",
            3 => "• • • — —",
            4 => "• • • • —",
            5 => "• • • • •",
            6 => "— • • • •",
            7 => "— — • • •",
            8 => "— — — • •",
            9 => "— — — — •",
            0 => "— — — — —",
            "• —" => "A",
            "— • • •" => "B",
            "— • — •" => "C",
            "— • •" => "D",
            "•" => "E",
            "• • — •" => "F",
            "— — •" => "G",
            "• • • •" => "H",
            "• •" => "I",
            "• — — —" => "J",
            "— • —" => "K",
            "• — • •" => 'L',
            "— —" => "M",
            "— •" => "N",
            "— — —" => "O",
            "• — — •" => "P",
            "— — • —" => 'Q',
            "• — •" => 'R',
            "• • •" => 'S',
            "—" => 'T',
            "• • —" => "U",
            "• • • —" => "V",
            "• — —" => 'W',
            "— • • —" => 'X',
            "— • — —" => 'Y',
            "— — • •" => 'Z',
            "• — • —" => "Ą",
            "— • — • •" => 'Ć',
            "• • — • •" => "Ę",
            "• — • • —" => 'Ł',
            "— — • — —" => "Ń",
            "— — — •" => "Ó",
            "• • • — • • •" => "Ś",
            "— — • • — •" => "Ż",
            "— — • • —" => 'Ź',
            "• — — — —" => 1,
            "• • — — —" => 2,
            "• • • — —" => 3,
            "• • • • —" => 4,
            "• • • • •" => 5,
            "— • • • •" => 6,
            "— — • • •" => 7,
            "— — — • •" => 8,
            "— — — — •" => 9,
            "— — — — —" => 0,
            // ". -" => "A",
            // "—•••" => "B",
            // "—•—•" => "C",
            // "—••" => "D",
            // "•" => "E",
            // "••—•" => "F",
            // "——•" => "G",
            // "••••" => "H",
            // "••" => "I",
            // "•———" => "J",
            // "—•—" => "K",
            // "•—••" => 'L',
            // "——" => "M",
            // "—•" => "N",
            // "———" => "O",
            // "•——•" => "P",
            // "——•—" => 'Q',
            // "•—•" => 'R',
            // "•••" => 'S',
            // "—" => 'T',
            // "••—" => "U",
            // "•••—" => "V",
            // "•——" => 'W',
            // "—••—" => 'X',
            // "—•——" => 'Y',
            // "——••" => 'Z',
            // "•—•—" => "Ą",
            // "—•—••" => 'Ć',
            // "••—••" => "Ę",
            // "•—••—" => 'Ł',
            // "——•——" => "Ń",
            // "———•" => "Ó",
            // "•••—•••" => "Ś",
            // "——••—•" => "Ż",
            // "——••—" => 'Ź',
            // "•————" => 1,
            // "••———" => 2,
            // "•••——" => 3,
            // "••••—" => 4,
            // "•••••" => 5,
            // "—••••" => 6,
            // "——•••" => 7,
            // "———••" => 8,
            // "————•" => 9,
            // "—————" => 0
        ];
        $translator = new Translator($morse, "");
        if (isset($_POST['word']) and !empty($_POST['word'])){
            $word = $_POST['word'];
        
            $translator->setWord(strtoupper($word));
            echo "<br><br>";
            echo $translator->toMorse();

        }
        if (isset($_POST['code']) and !empty($_POST['code'])){
            $code = $_POST['code'];
        
            $translator->setWord($code);
            echo "<br><br>";
            echo $translator-> toWord();
       }
        ?>
        </center>
        <script src="flip.js"></script>
    </body>
    </html>
