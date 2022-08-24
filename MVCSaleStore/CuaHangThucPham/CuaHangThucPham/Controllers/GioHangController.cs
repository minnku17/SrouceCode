using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using CuaHangThucPham.Models;

namespace CuaHangThucPham.Controllers
{
    public class GioHangController : Controller
    {
        dbQlCuaHangDataContext data = new dbQlCuaHangDataContext();
        public List<GioHang> LayGioHang()
        {
            List<GioHang> lstGioHang = Session["GioHang"] as
            List<GioHang>;
            if (lstGioHang == null)
            {
                //Nếu giỏ hàng chưa tồn tại thì khởi tạo listGioHang
                lstGioHang = new List<GioHang>();
                Session["GioHang"] = lstGioHang;

            }
            return lstGioHang;
        }
        public ActionResult ThemGioHang(int iMaThucPham, string strURL)
        {
            //Lấy ra session giỏ hàng
            List<GioHang> lstGioHang = LayGioHang();
            //Kiểm tra sách này tồn tại trong session["GioHang"] chưa?
            GioHang sanpham = lstGioHang.Find(n => n.iMaThucPham == iMaThucPham);
            if (sanpham == null)
            {
                sanpham = new GioHang(iMaThucPham);
                lstGioHang.Add(sanpham);
                return Redirect(strURL);
            }
            else
            {
                sanpham.iSoLuong++;
                return Redirect(strURL);
            }
        }
        private int TongSoLuong()
        {
            int iTongSoLuong = 0;
            List<GioHang> lstGioHang = Session["GioHang"] as
            List<GioHang>;

            if (lstGioHang != null)
            {
                iTongSoLuong = lstGioHang.Sum(n => n.iSoLuong);
            }
            return iTongSoLuong;
        }
        private double iTongTien()
        {
            double iTongTien = 0;
            List<GioHang> lstGioHang = Session["GioHang"] as
            List<GioHang>;
            if (lstGioHang != null)
            {
                iTongTien = lstGioHang.Sum(n => n.dThanhTien);
            }
            return iTongTien;
        }
        public ActionResult GioHang()
        {
            List<GioHang> lstGioHang = LayGioHang();
            if (lstGioHang.Count == 0)
            {
                return RedirectToAction("Index", "CuaHang");
            }
            ViewBag.Tongsoluong = TongSoLuong();
            ViewBag.Tongtien = iTongTien();
            return View(lstGioHang);
        }
        public ActionResult GioHangPartial()
        {
            ViewBag.TongSoluong = TongSoLuong();
            ViewBag.TongTien = iTongTien();
            return PartialView();
        }
        public ActionResult XoaGioHang(int iMaSP)
        {
            //Lay gio hang tu Session
            List<GioHang> lstGioHang = LayGioHang();
            // Kiểm tra sách đã có trong Session["Giohang"]
            GioHang sanpham = lstGioHang.SingleOrDefault(n =>
            n.iMaThucPham == iMaSP);
            //Nếu tồn tại thì cho sửa Soluong
            if (sanpham != null)
            {
                lstGioHang.RemoveAll(n => n.iMaThucPham == iMaSP);
                return RedirectToAction("GioHang");
            }
            if (lstGioHang.Count == 0)
            {

                return RedirectToAction("Index", "CuaHang");
            }
            return RedirectToAction("GioHang");
        }
        public ActionResult CapNhatGioHang(int iMaSP, FormCollection f)
        {
            List<GioHang> lstGioHang = LayGioHang();
            //Kiem tra sach da co trong Session["Giohang"]
            GioHang sanpham = lstGioHang.SingleOrDefault(n =>
            n.iMaThucPham == iMaSP);
            //Nếu tồn tại thì sửa Soluong
            if (sanpham != null)
            {
                sanpham.iSoLuong =
                int.Parse(f["txtSoluong"].ToString());
            }
            return RedirectToAction("GioHang");
        }
        public ActionResult XoaTatCaGioHang()
        {
            //Lay gio hang tu Session
            List<GioHang> lstGioHang = LayGioHang();
            lstGioHang.Clear();
            return RedirectToAction("Index", "CuaHang");
        }
        [HttpGet]
        public ActionResult DatHang()
        {
            //Kiem tra dang nhap
            if (Session["TaiKhoan"] == null || Session["TaiKhoan"].ToString() == "")
            {
                return RedirectToAction("DangNhap", "Nguoidung");

            }
            if (Session["GioHang"] == null)
            {
                return RedirectToAction("Index", "CuaHang");
            }
            //Lay gio hang tu Session
            List<GioHang> lstGioHang = LayGioHang();
            ViewBag.TongSoLuong = TongSoLuong();
            ViewBag.TongTien = iTongTien();
            return View(lstGioHang);
        }
        public ActionResult DatHang(FormCollection collection)
        {
            //Them don hang
            DonDatHang ddh = new DonDatHang();
            KhachHang kh = (KhachHang)Session["TaiKhoan"];
            List<GioHang> gh = LayGioHang();
            ddh.MaKH = kh.MaKH;
            ddh.NgayDH = DateTime.Now;
            var NgayGiao = String.Format("{0:MM/dd/yyyy}", collection["NgayGiao"]);
            ddh.NgayGiao = DateTime.Parse(NgayGiao);
            ddh.TinhTrangGiaoHang = false;
            ddh.DaThanhToan = false;
            data.DonDatHangs.InsertOnSubmit(ddh);
            data.SubmitChanges();
            //Them chi tiet don hang
            foreach (var item in gh)
            {
                ChiTietDatHang ctdh = new ChiTietDatHang();
                ctdh.SoDH = ddh.SoDH;
                ctdh.MaThucPham = item.iMaThucPham;
                ctdh.SoLuong = item.iSoLuong;
                ctdh.DonGia = (decimal)item.dDonGia;
                data.ChiTietDatHangs.InsertOnSubmit(ctdh);
            }
            data.SubmitChanges();
            Session["GioHang"] = null;
            return RedirectToAction("XacNhanDonHang", "GioHang");
        }
        public ActionResult XacNhanDonHang()
        {
            return View();
        }
        // GET: GioHang
        public ActionResult Index()
        {
            return View();
        }
    }
}