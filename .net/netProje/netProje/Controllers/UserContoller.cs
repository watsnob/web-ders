using Microsoft.AspNetCore.Mvc;
using netProje.Models;

namespace netProje.Controllers
{
    [ApiController]
    [Route("[Controller]")]
    public class UserContoller : ControllerBase
    {
        private static List<UserModel> _users = new List<UserModel>()
        {
            new UserModel{UserId = 1, UserName="Eren", UserUnvan=".Net Developer"},
            new UserModel{UserId = 2, UserName="Efe Esen", UserUnvan="Php Developer"},
            new UserModel{UserId = 3, UserName="Kasım Hoca", UserUnvan="Js Developer"}
        };


        [HttpGet("List")]
        //starpalet.com/userList
        public IActionResult UserList()
        {
            return Ok(_users);
        }

        [HttpGet("GetByIdUser/{id}")]
        public IActionResult GetByIdUsers(int id)
        {
            var user = _users.FirstOrDefault(x => x.UserId == id);
            if (user == null)
            {
                return NotFound(new { Message = "Kullanıcı Bulunamadı" });
            }
            return Ok(user);
        }

        [HttpPost("UserAdd")]
        public IActionResult UserAdd(UserModel newUser)
        {
            newUser.UserId = _users.Max(x => x.UserId)+1;
            _users.Add(newUser);
            return Ok(newUser);
        }

        [HttpPut("UserUpdate/{id}")]
        public IActionResult UpdateUser(int id, UserModel newUser)
        {
            var user = _users.FirstOrDefault(p => p.UserId == id);
            if (user == null)
            {
                return NotFound(new { Message = "Kullanıcı bulunamadı" });
            }

            user.UserName = newUser.UserName;
            user.UserUnvan = newUser.UserUnvan;
            return Ok(_users);
        }

        [HttpDelete("UserDelete/{id}")]
        public IActionResult UserDelete(int id)
        {
            var user = _users.FirstOrDefault(p => p.UserId == id);
            if (user == null)
            {
                return NotFound(new { Message = "Kullanıcı bulunamadı" });
            }

            _users.Remove(user);
            return Ok(_users);
        }
    }
}
