using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using CuaHangThucPham.Models;

using PagedList;
using PagedList.Mvc;

namespace CuaHangThucPham.Controllers
{
    public class CuaHangController : Controller
    {
        dbQlCuaHangDataContext data = new dbQlCuaHangDataContext();
        private List<ThucPham> Layhangmoi(int count)
        {
            return data.ThucPhams.OrderByDescending(a => a.NgayCapNhat).Take(count).ToList();
        }
        // GET: CuaHang
        public ActionResult Index(int ? page)
        {
            int pageSize = 15;
            int pageNum = (page ?? 1);

            var hangMoi = Layhangmoi(10);
            return View(hangMoi.ToPagedList(pageNum,pageSize));
        }
        public ActionResult LoaiThucPham()
        {
            var loaithucpham = from cd in data.LoaiThucPhams select cd;
            return PartialView(loaithucpham);
        }
        public ActionResult PhanLoaiThucPham(int id)
        {
            var thucpham = from s in data.ThucPhams where s.MaLoaiThucPham == id select s;
            return View(thucpham);
        }
        public ActionResult Details(int id)
        {
            var thupham = from s in data.ThucPhams where s.MaThucPham == id select s;
            return View(thupham.Single());
        }
    }
}