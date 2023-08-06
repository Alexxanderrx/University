<card class="w-[59%]  md:h-full h-[350px] bg-white border md:overflow-y-scroll md:overflow-x-hidden overflow-scroll">
    <div class="w-full  border-b p-3">
        <p>Tus materias inscritas</p>
    </div>
    <div class="p-4">
        <table id="tablaClasesInscritas" class="display border ">
            <thead>
                <tr>
                    <th>#</th>
                    <th class="border">Materia</th>
                    <th class="border">Darse de baja</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $id_info = $_SESSION["id_info"];
                $resultInfoClass = $mysqli->query("SELECT * FROM info_classes WHERE id_info_fk = '$id_info'");
                // $resultClasses = $mysqli->query("SELECT * FROM classes WHERE id_class = $numClass");

                $i = 1;
                while ($datosInfoClass = $resultInfoClass->fetch_assoc()) {
                    $_SESSION['numIdInfo' . $i] = $datosInfoClass["id_info_fk"];
                    $_SESSION['numClass' . $i] = $datosInfoClass["id_class_fk"];
                    $numClass = $datosInfoClass["id_class_fk"];
                    $resultClasses = $mysqli->query("SELECT * FROM classes WHERE id_class = $numClass");
                    $datosClass = $resultClasses->fetch_assoc();
                    $nameClass = $datosClass['name_class'];


                    echo "
                        <tr class='border'>
                            
                                <td>$i</td>
                                <td>$nameClass</td>
                                <td>
                                    <form method='post' action='./darDeBaja.php'>
                                        <input class='hidden' name='iValue' value='$i'/>
                                        <button type='submit'>
                                            <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='red' class='w-6 h-6'>
                                            <path stroke-linecap='round' stroke-linejoin='round' d='M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z' />
                                            </svg>
                                        </button>
                                    </form>
                                </td> 
                            
                        </tr>";
                    $i++;
                };
                ?>
            </tbody>
        </table>
    </div>

</card>
<card class="w-[39%]  md:h-full h-[350px] bg-white border md:overflow-y-scroll md:overflow-x-hidden overflow-scroll">
    <div class="w-full  border-b p-3">
        <p>Materias para inscribir</p>
    </div>
    <form class="w-full p-3" method='post' action='./inscribir.php'>
        <?php
        // $id_info = $_SESSION["id_info"];
        $resultClasses = $mysqli->query("SELECT * FROM classes ");
        // $resultClasses = $mysqli->query("SELECT * FROM classes WHERE id_class = $numClass");

        // $i = 1;
        while ($datosClasses = $resultClasses->fetch_assoc()) {
            // $_SESSION['numIdInfo' . $i] = $datosInfoClass["id_info_fk"];
            // $_SESSION['numClass' . $i] = $datosInfoClass["id_class_fk"];
            // $numClass = $datosInfoClass["id_class_fk"];
            // $resultClasses = $mysqli->query("SELECT * FROM classes WHERE id_class = $numClass");
            // $datosClass = $resultClasses->fetch_assoc();
            // $nameClass = $datosClass['name_class'];
            $name_class = $datosClasses["name_class"];

            echo '<div>
            <input type="radio" id="$name_class" name="$name_class" value="$name_class" checked />
            <label for="huey">';
            print_r($name_class);
            echo '</label>
          </div>';
            // $i++;
        };
        ?>
        <button type='submit'>
    </form>
</card>