<?php 
    require_once "autocargar.php";
    require 'vendor/autoload.php';

    $conexion = DB::abreConexion();

    $A=$_POST;

    $solicitud = "
        <h1> DATOS SOLICITUD</h1>
        <table border='1px'>
            <tr>
                <th>Curso</th>
                <th>Telefono</th>
                <th>Domicilio</th>
                <th>Correo</th>
            </tr>
            <tr>
                <td>".$_POST["curso"]."</td>
                <td>".$_POST["telefonoCandidato"]."</td>
                <td>".$_POST["correoCandidato"]."</td>
                <td>".$_POST["domicilioCandidato"]."</td>
            </tr>
        </table> 
        
    ";
    $A=$_POST;
    $A=$_POST;
    $A=$_POST;
    $A=$_POST;

    // use Dompdf\Dompdf;
    // use Dompdf\Options;

    // $options = new Options();
    // $options->set('isHtml5ParserEnabled', true);
    // $options->set('isPhpEnabled', true);

    // $dompdf = new Dompdf($options);
    // $dompdf->loadHtml($solicitud);
    // $dompdf->setPaper('A4', 'portrait');
    // $dompdf->render();

    // $pdfContent = $dompdf->output();


    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\Exception;

    // $mail = new PHPMailer(true);

    // try {
    //     $mail->isSMTP();
    //     $mail->SMTPDebug  = 2;                          
    //     $mail->SMTPAuth   = true;
    //     $mail->SMTPSecure = "tls";                 
    //     $mail->Host       = "smtp.gmail.com";    
    //     $mail->Port       = 587;           

    //     $mail->Username   = "dgargay987@g.educaand.es";

    //     $mail->Password   = "qnwq grag uxzu xico";

    //     $mail->setFrom('dgargay987@g.educaand.es', 'Diego');
    //     $mail->addAddress('dgargay987@g.educaand.es');
    //     $mail->addStringAttachment($pdfContent, 'table.pdf', 'base64', 'application/pdf');
        
    //     $mail->isHTML(true);
    //     $mail->Subject = 'Solicitud del alumno';
    //     $mail->Body    = 'Aqui está el documento que acredita su solicitud.';
        
    //     $mail->send();
    //     echo 'Correo electrónico enviado con éxito.';
    // } catch (Exception $e) {
    //     echo "Error al enviar el correo electrónico: {$mail->ErrorInfo}";
    // }
?>