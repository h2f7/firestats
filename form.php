<html>
    <body>
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
                    <td colspan="2" align="center"><input type="reset">
                    <input type="submit" value="eintragen"></td>
                </tr>
            </table>
        </form>
    </body>
</html>


