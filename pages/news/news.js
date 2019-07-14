// pages/news/news.js
var app = getApp()
Page({

  /**
   * 页面的初始数据
   */
  data: {
    moto: [],//参数
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function () {
    this.getdata();

  },
  //自定义参数名字
  getdata: function () {
    var that = this;
    wx.request({
      url: 'https://你的域名/news/',
      method: 'GET',
      dataType: 'json',
      success: function (res) {
        that.setData({
          moto: res.data
        })
      },
      fail: function (err) { }, //请求失败
      complete: function () { } //请求完成后执行的函数
    })
  },
  /**
 * 用户点击右上角分享
 */
  onShareAppMessage: function () {
  }
})