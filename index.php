<html>
    <head>
        <title>FireStat</title>
        <link href="style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <header>
            <h1>FireStat</h1>
        </header>
        <nav>
            <ul>
                <li>
                    <a href="#">Startseite</a>
                </li>
                <li>
                    <a href="report.php>Auswertung</a>
                </li>
            </ul>
        </nav>
        <main>
            <form method="POST" action="post.php">
                <table>
                    <tr>
                        <td>Datum</td>
                        <td><input type="datetime-local" name="date_start"></td>
                    </tr>
                    <tr>
                        <td>Ende</td>
                        <td><input type="datetime-local" name="date_end"></td>
                    </tr>
                    <tr>
                        <td>Einheit</td>
                        <td>
                            <select name="unit">
                                <option>Einsatzabteilung Büttelborn</option>
                                <option>ELW1 Büttelborn</option>
                                <option>GW IuK / ELW2</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Art</td>
                        <td>
                            <select name="art">
                                <option>Ausbildung</option>
                                <option>Einsatz</option>
                                <option>Lehrgang</option>
                                <option>zBV</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Stichwort</td>
                        <td><input type="text" name="keyword"></td>
                    </tr>
                    <tr>
                        <td>Funktion</td>
                        <td>
                            <select name="function">
                                <option>Mannschaft</option>
                                <option>Einheitsführer</option>
                                <option>Drohne</option>
                                <option>zBV</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Bemerkung</td>
                        <td><input type="text" name="note"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="eintragen"><br><input type="reset"></td>
                    </tr>
                </table>            
            </form>
        </main>
        <aside id="aside">
            InfoBox
        </aside>
        <footer>
            FireStat is copyright by Helge Lachner 2023<br>made with love and passion in hessen
        </footer>
    </body>
</html>