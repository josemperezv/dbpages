<?php
  $host = "localhost";
  $username = "root";
  $password = "dunkelheit";
  $dbname = "telcorphelpdesk";

  // Create connection
  $conn = new mysqli($host, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
  } 

  $sql = "SELECT incidencia.Ticket, incidencia.Descripcion, incidencia.Fecha_apertura, cliente.Nombre, tecnico.Nombre_tecnico, prioridad.PTipo, categoria.CTipo
          FROM incidencia
          INNER JOIN cliente
          ON incidencia.Cliente=cliente.RIF
          INNER JOIN tecnico
          ON incidencia.Asignado=tecnico.Cedula
          INNER JOIN prioridad
          ON incidencia.Prioridad=prioridad.ID_Prioridad
          INNER JOIN categoria
          ON incidencia.Categoria=categoria.ID_Categoria
          ORDER BY `Ticket` DESC";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
       echo "<table>
              <tr>
                <td colspan='2' align='left' style='padding-left: 20px'>
                  <select>
                    <option value='all'>Todos</option>
                  </select>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><button type='button' class='btn-small' data-toggle='modal' data-target='#myModalNorm'>+ Nuevo</button></td>
              </tr>";
       echo "<tr>
              <th>Ticket ID</th>
              <th>Cliente</th>
              <th>Descripción</th>
              <th>Asignado a</th>
              <th>Creado</th>
              <th>Prioridad</th>
              <th>Categoria</th>
              <th>Estado</th>
            </tr>";
       // output data of each row   <a href='#' class='btn-small' data-toggle='modal' data-target='#myModalNorm'>+ Nuevo</a>
       while($row = $result->fetch_assoc()) {
           echo "<tr>
                  <td width='10%'>" . $row["Ticket"]. "</td>
                  <td width='10%'>" . $row["Nombre"]. "</td>
                  <td width='30%' align='left'>" . $row["Descripcion"]. "</td>
                  <td width='15%'>" . $row["Nombre_tecnico"]. "</td>
                  <td width='10%'>" . $row["Fecha_apertura"]. "</td>
                  <td width='7%'>" . $row["PTipo"]. "</td>
                  <td width='8%'>" . $row["CTipo"]. "</td>
                  <td width='10%'></td>
                </tr>";
              }
           echo "</table>";
      } else {
           echo "0 results";
      }

  $conn->close();
?>