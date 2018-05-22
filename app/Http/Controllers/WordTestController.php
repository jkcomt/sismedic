<?php

namespace App\Http\Controllers;
use App\Cita;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\Style\Font;
use PhpOffice\PhpWord\Style\Paragraph;
use View;


class WordTestController extends Controller
{

    public function createWordDocx($id)
    {
                  $cita=Cita::find($id);

                  $languageEnGb = new \PhpOffice\PhpWord\Style\Language(\PhpOffice\PhpWord\Style\Language::EN_GB);
                  $wordTest= new \PhpOffice\PhpWord\PhpWord();
                  $newSection=$wordTest->addSection();
                  $wordTest->getSettings()->setThemeFontLang($languageEnGb);

                  $desc1="CENTRO MÉDICO DE SALUD OCUPACIONAL “CIABU”";

                  $wordTest->addFontStyle('rStyle', array('bold'=>true,'size'=>16));
                  $wordTest->addFontStyle('rStyles', array('size'=>16));
                  $wordTest->addFontStyle('rStyl', array('name'=>'Tahoma','bold'=>true,'size'=>11));
                  $wordTest->addParagraphStyle('pStyle', array('align'=>'center', 'spaceAfter'=>100));
                   $table = $newSection->addTable();
                   $table->addRow();
                   $table->addCell(1750)->addImage('img/logo.ico/logo.jpg', array('width'=>45, 'height'=>45,'align'=>'center', 'spaceAfter'=>100));
                   $table->addCell(7000)->addText($desc1,'rStyles', 'pStyle');
                   $estilotabla= array('borderSize' =>'5' );

                   $newSection->addTextBreak(1);
                   $newSection->addText('INFORME MEDICO', 'rStyle', 'pStyle');



                   $tableuno = $newSection->addTable($estilotabla);

                   $tableuno->addRow();
                   $tableuno->addCell(1750)->addText("Asunto", 'rStyl', 'pStyle');
                   $tableuno->addCell(7000)->addText("");
                   $tableuno->addRow();
                   $tableuno->addCell(1750)->addText("Especialidad",'rStyl', 'pStyle');
                   $tableuno->addCell(7000)->addText("");
                   $tableuno->addRow();
                   $tableuno->addCell(1750)->addText("Fecha",'rStyl', 'pStyle');
                   $tableuno->addCell(7000)->addText("");
                   $newSection->addTextBreak(1);

                   $tabledos = $newSection->addTable($estilotabla);
                   $tabledos->addRow();
                   $tabledos->addCell(8750)->addText("1.- Datos Personales",'rStyl');
                   $tabledos->addRow();
                   $tabledos->addCell(8750)->addText($cita->paciente->nombres." ".$cita->paciente->apellido_paterno." ".$cita->paciente->apellido_materno,array('name'=>'Tahoma','size'=>15));
                   $newSection->addTextBreak(1);
                   $tabletres = $newSection->addTable($estilotabla);

                   $tabletres->addRow();
                   $tabletres->addCell(8750)->addText("2.- Antecedentes",'rStyl');
                   $tabletres->addRow();
                   $tabletres->addCell(8750)->addText("  ",array('name'=>'Tahoma','size'=>25));
                   $newSection->addTextBreak(1);
                   $tablecuatro = $newSection->addTable($estilotabla);

                   $tablecuatro->addRow();
                   $tablecuatro->addCell(8750)->addText("3.- Resumen",'rStyl');
                   $tablecuatro->addRow();
                   $tablecuatro->addCell(8750)->addText("  ",array('name'=>'Tahoma','size'=>25));
                   $newSection->addTextBreak(1);
                   $tablecinco = $newSection->addTable($estilotabla);

                   $tablecinco->addRow();
                   $tablecinco->addCell(8750)->addText("4.- Sugerencia",'rStyl');
                   $tablecinco->addRow();
                   $tablecinco->addCell(8750)->addText("  ",array('name'=>'Tahoma','size'=>25));



        $objecWriter=  \PhpOffice\PhpWord\IOFactory::createWriter($wordTest, 'Word2007');
        try{
          $objecWriter->save(storage_path('TestWordFile.docx'));
        }catch(Exception $e){}

          return response()->download(storage_path('TestWordFile.docx'));
    }

    public function interconsultapdf($id)
    {
      $cita=Cita::find($id);
      $view=View::make('evaluacionmedica.reportes.interconsulta',compact('cita'));
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      $pdf->stream($view);
      return $pdf->stream();
    }
}
