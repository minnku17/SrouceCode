using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using CuaHangThucPham.Models;

using PagedList;
using PagedList.Mvc;

namespace CuaHangThucPham.Controllers
{
    public class AdminController : Controller
    {
        dbQlCuaHangDataContext db = new dbQlCuaHangDataContext();
        // GET: Admin
        public ActionResult Index()
        {
            return View();
        }
        public ActionResult ThucPham(int? page)
        {
            int pageNumber = (page ?? 1);
            int pageSize = 7;


            return View(db.ThucPhams.ToList().OrderBy(n => n.MaThucPham).ToPagedList(pageNumber, pageSize));
        }
        [HttpGet]
        public ActionResult Login()
        {
            return View();
        }
        [HttpPost]
        public ActionResult Login(FormCollection collection)
        {
            //Gán các giá trị người dùng nhập liệu cho các biến
            var tendn = collection["UserAdmin"];
            var matkhau = collection["PassAdmin"];
            if (String.IsNullOrEmpty(tendn))
            {
                ViewData["Loi1"] = "Phải nhập tên đăng nhập";
            }
            else if (String.IsNullOrEmpty(matkhau))
            {
                ViewData["Loi2"] = "Phải nhập mật khẩu";
            }
            else
            {
                //Gán giá trị cho đối tượng được tạo mới (ad)
                Admin ad = db.Admins.SingleOrDefault(n => n.UserAdmin == tendn && n.PassAdmin == matkhau);
                if (ad != null)
                {
                    Session["Taikhoanadmin"] = ad;
                    return RedirectToAction("Index", "Admin");
                }
                else
                    ViewBag.Thongbao = "Tên đăng nhập hoặc mật khẩu không đúng";
            }
            return View();
        }
        [HttpGet]
        public ActionResult ThemMoiThucPham()
        {
            ViewBag.MaLoaiThucPham = new SelectList(db.LoaiThucPhams.ToList().OrderBy(n => n.TenLoai), "MaLoaiThucPham", "TenLoai");
            
            return View();
        }
        [HttpPost]
       
        public ActionResult ThemMoiThucPham(ThucPham thucpham, HttpPostedFileBase fileupload)
        {
            ViewBag.MaLoaiThucPham = new SelectList(db.LoaiThucPhams.ToList().OrderBy(n => n.TenLoai), "MaLoaiThucPham", "TenLoai");
           
            if (fileupload == null)
            {
                ViewBag.Thongbao = "Vui lòng chọn ảnh bìa";
                return View();

            }
            else
            {
                if (ModelState.IsValid)
                {
                    var fileName = Path.GetFileName(fileupload.FileName);
                    var path = Path.Combine(Server.MapPath("~/Hinhsanpham"), fileName);
                    if (System.IO.File.Exists(path))
                    {
                        ViewBag.Thongbao = "Hình ảnh đã tồn tại";
                        return View();
                    }
                    else
                    {
                        fileupload.SaveAs(path);
                    }
                    thucpham.AnhBia = fileName;
                    db.ThucPhams.InsertOnSubmit(thucpham);
                    db.SubmitChanges();
                }
            }

            return RedirectToAction("ThucPham");
        }
        public ActionResult ChiTietThucPham(int id)
        {
            //lay ra sach theo ma
            ThucPham thucpham = db.ThucPhams.SingleOrDefault(n => n.MaThucPham == id);
            ViewBag.MaThucPham = thucpham.MaThucPham;
            if (thucpham == null)
            {
                Response.StatusCode = 404;
                return null;
            }
            return View(thucpham);
        }
        [HttpGet]
        public ActionResult XoaThucPham(int id)
        {
            //lay ra sach theo ma
            ThucPham thucpham = db.ThucPhams.SingleOrDefault(n => n.MaThucPham == id);
            ViewBag.MaThucPham = thucpham.MaThucPham;
            if (thucpham == null)
            {
                Response.StatusCode = 404;
                return null;
            }
            return View(thucpham);
        }
        [HttpPost, ActionName("XoaThucPham")]
        public ActionResult XacNhanXoa(int id)
        {
            //lay ra sach theo ma
            ThucPham thucpham = db.ThucPhams.SingleOrDefault(n => n.MaThucPham == id);
            ViewBag.MaThucPham = thucpham.MaThucPham;
            if (thucpham == null)
            {
                Response.StatusCode = 404;
                return null;
            }
            db.ThucPhams.DeleteOnSubmit(thucpham);
            db.SubmitChanges();
            return RedirectToAction("ThucPham");
        }
    }
}