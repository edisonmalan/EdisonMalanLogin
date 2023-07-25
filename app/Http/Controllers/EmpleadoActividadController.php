<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;

class EmpleadoActividadController extends Controller
{
    private $apiBaseUri = 'https://localhost:44386/api/EmpleadoActividads';

    private function createHttpClient()
    {
        $handlerStack = HandlerStack::create(new CurlHandler());
        $httpClient = new Client([
            'base_uri' => $this->apiBaseUri,
            'handler' => $handlerStack,
            'verify' => env('APP_ENV') === 'local' ? false : true,
        ]);

        return $httpClient;
    }

    public function index()
    {
        $client = $this->createHttpClient();
        $response = $client->get($this->apiBaseUri);

        $empleadoActividades = json_decode($response->getBody()->getContents(), true);

        return view('empleadoactividades.index', compact('empleadoActividades'));
    }

    public function create()
    {
        return view('empleadoactividades.create');
    }

    public function store(Request $request)
    {
        $client = $this->createHttpClient();
        $response = $client->post($this->apiBaseUri, [
            'json' => $request->all()
        ]);

        // Manejar la respuesta según sea necesario (por ejemplo, mostrar mensajes de éxito)

        return redirect()->route('empleadoactividades.index')->with('success', 'Empleado actividad creada exitosamente');
    }

    public function show($id)
    {
        $client = $this->createHttpClient();
        $response = $client->get("{$this->apiBaseUri}/$id");

        $empleadoActividad = json_decode($response->getBody()->getContents(), true);

        return view('empleadoactividades.show', compact('empleadoActividad'));
    }

    public function edit($id)
    {
        $client = $this->createHttpClient();
        $response = $client->get("{$this->apiBaseUri}/$id");

        $empleadoActividad = json_decode($response->getBody()->getContents(), true);

        return view('empleadoactividades.edit', compact('empleadoActividad'));
    }

    public function update(Request $request, $id)
    {
        $client = $this->createHttpClient();
        $response = $client->put("{$this->apiBaseUri}/$id", [
            'json' => $request->all()
        ]);

        // Manejar la respuesta según sea necesario (por ejemplo, mostrar mensajes de éxito)

        return redirect()->route('empleadoactividades.index')->with('success', 'Empleado actividad actualizada exitosamente');
    }

    public function destroy($id)
    {
        $client = $this->createHttpClient();
        $response = $client->delete("{$this->apiBaseUri}/$id");

        // Manejar la respuesta según sea necesario (por ejemplo, mostrar mensajes de éxito)

        return redirect()->route('empleadoactividades.index')->with('success', 'Empleado actividad eliminada exitosamente');
    }
}