using Invitacion.Models;
using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Configuration;
using System.Diagnostics;

namespace Invitacion.Controllers
{
    public class HomeController : Controller
    {
        private readonly ILogger<HomeController> _logger;
        private readonly IConfiguration _configuration;

        public HomeController(ILogger<HomeController> logger, IConfiguration configuration)
        {
            _logger = logger;
            this._configuration = configuration;
        }

        public IActionResult Index(string id)
        {

            var invitados = _configuration.GetSection("Invitados").Get<List<Invitado>>();
            var numero_invitados = invitados.Count();
            var numero_total = 0;

            foreach(var invitado in invitados)
            {
                numero_total += invitado.no_invitados;
            }

            var invitado_valido = invitados.FirstOrDefault(x => x.guid == id);

            if(invitado_valido == null)
            {
                return RedirectToAction("Privacy");
            }
            else
            {
                ViewBag.Nombre = invitado_valido.nombre;
                ViewBag.MaxInvitados = invitado_valido.no_invitados;
                ViewBag.Niños = invitado_valido.niños;
            }

            return View();
        }

        public IActionResult Privacy()
        {
            return View();
        }

        [ResponseCache(Duration = 0, Location = ResponseCacheLocation.None, NoStore = true)]
        public IActionResult Error()
        {
            return View(new ErrorViewModel { RequestId = Activity.Current?.Id ?? HttpContext.TraceIdentifier });
        }
    }
}
