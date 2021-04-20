<script src="<?= WEB_ROOT ?>/lib/jquery-3.6.0.js"></script>
<script src="<?= WEB_ROOT ?>/bootstrap/js/bootstrap.bundle.js"></script>

<!-- 購物車旁提示購物數量 -->
<script>
    function showCartCount(cart){
        // 先設一開始為空
        let total = 0;
        for(let i in cart){
            total += cart[i].quantity;
            // total ++;
        }
        $('.cart-count').text(total);
    }
// 從cart.api抓
    $.get('cart-api.php', function(data){
        showCartCount(data);
    }, 'json');
</script>
