<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>NICE PG :: NICEPAY</title>
  <meta http-equiv="Content-Type" content="text/html; CharSet=utf-8;" />
  <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
</head>
<body onload="goPay(document.tranMgr);">
  <form name="tranMgr" accept-charset="euc-kr" action="https://web.nicepay.co.kr/v3/v3Payment.jsp">
    <input type="hidden" name="GoodsName" value="붕어빵이 자꾸 생각나" />
    <input type="hidden" name="Amt" value="5000" />
    <input type="hidden" name="MID" value="wwhgift01m" />
    <input type="hidden" name="EdiDate" value="20210328011806" />
    <input type="hidden" name="Moid" value="000000006PXJYL30XJ" />
    <input type="hidden" name="SignData" value="9fb5a91503425aa50ebb37162ac212f49fa788b9a758165f2c397b324a92a44c" />
    <input type="hidden" name="BuyerEmail" value="" />
    <input type="hidden" name="BuyerName" value="151201002987" />
    <input type="hidden" name="BuyerTel" value="" />
    <input type="hidden" name="PayMethod" value="CARD" />
    <input type="hidden" name="CharSet" value="utf-8" />
    <input type="hidden" name="SupplyAmt" value="" />
    <input type="hidden" name="GoodsVat" value="" />
    <input type="hidden" name="ServiceAmt" value="" />
    <input type="hidden" name="TaxFreeAmt" value="" />
    <input type="hidden" name="PayshotID" value="BDMJ20170310112100000151201002987" />
    <input type="hidden" name="ReturnURL" value="https://billing.baemin.com/v3/pay/return/nicepay/000000006PXJYL30XJ" />
    <!-- ISP 및 계좌이체 리턴 URL (앱 스키마 명 입력) -->
    <input type="hidden" name="WapUrl" value="baemin://." />
    <!-- ISP 취소 URL(앱 스키마 명 입력) -->
    <input type="hidden" name="IspCancelUrl" value="baemin://." />
  </form>
</body>
<script language="javascript">
  function goPay(form) {
      form.target = "_self";
      form.method = "post";
      form.submit();
  }
</script>
</html>