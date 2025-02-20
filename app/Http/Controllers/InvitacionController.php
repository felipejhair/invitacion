<?php
 
namespace App\Http\Controllers;
 
use App\Models\Invitado;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Config;
 
class InvitacionController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function show($id): View
    {


        $numero_total = 0;


        $invitadosDB = $this->obtenerDatos($id);
        
        if (!$invitadosDB->result) {
            return $this->error_invite();
        }

        return view('Invitacion', ['invitados'=>$invitadosDB]);
    }
    
    public function error_invite(): View
    {
        

        return view('error');
    }
    
    
    public function saveConfirmation(Request $request) {
        // Genera el enlace de WhatsApp
        $invitados = $request->input('numero_invitados');
        $guid = $request->input('GUID');
        $this->confirmar($invitados, $guid);

        return response()->json(['invitados' => $invitados]);
    }
    
    public function obtenerDatos($id)
    {
        $results = new \stdClass();

    
        $consulta = "SELECT * FROM Invitado WHERE GUID = ?";

        try {
            $resultados = DB::select($consulta, [$id]);
            $results->result = $resultados;

        } catch (\Exception $ex) {
            $results->mensajeError = "Error al ejecutar la consulta: " . strval($ex);;
        }
        
        $results->consulta = $consulta;
        
        return $results;
    }

    public function insertarDato($guid, $nombre, $invmax, $ninos, $invConf)
    {
        $consulta = "INSERT INTO Invitado (GUID, Nombre, InvitadosMax, Ninos, InvitadosConfirmados) VALUES (?, ?, ?, ?, ?)";

        try {
            DB::insert($consulta, [$guid, $nombre, $invmax, $ninos, $invConf]);
            Log::info("Dato insertado correctamente.");
        } catch (\Exception $ex) {
            Log::error("Error al insertar el dato: " . $ex->getMessage());
        }
    }
    
    public function confirmar($invitados, $guid)
    {
        $consulta = "UPDATE Invitado SET InvitadosConfirmados = ? WHERE GUID = ?";

        try {
            DB::insert($consulta, [$invitados, $guid]);
            Log::info("Dato actualizado correctamente.");
        } catch (\Exception $ex) {
            Log::error("Error al insertar el dato: " . $ex->getMessage());
        }
    }
}