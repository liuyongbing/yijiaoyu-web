    <section class="joinUs_brand  main_brand">
        <div class="p1">
            <img src="/imgs/fabletwon/p1.jpg{{ $STATIC_VERSION }}" alt="01"/>
        </div>
        <div class="p2">
            <div class="imgbox">
            <img src="/imgs/fabletwon/p3.png{{ $STATIC_VERSION }}" alt="02"/>
            </div>
        </div>
        <div class="joinus_from">
            <h3 class="top">
                <a href="javascript:;">留言咨询 <span class="icon"></span></a>
                <a href="javascript:;">0717-6232880</a>
                <span>如果你对此项目感兴趣，请留言，获取更多的加盟资料！</span>
            </h3>
            <div class="formBox">
                <div class="left fl">
                    <dl class="arrowClass">
                        <dd>留言咨询</dd>
                        <dd>等待回访</dd>
                        <dd>签约合作</dd>
                    </dl>
                </div>
                <div class="right fr">
                    <form name="apply" action="{{ route('apply.store') }}" method="post">
                    <div class="input_group">
                    
                        {{ csrf_field() }}
                        <input type="hidden" name="brand_id" id="brand_id" value="3" />
                        
                        <div class="input_box">
                            <label>姓名:</label>
                            <input name="username" id="username" type="text" placeholder="真实姓名"/>
                        </div>
                        <div class="input_box">
                            <label>手机:</label>
                            <input name="mobile" id="mobile" type="tel" placeholder="请填写手机号"/>
                        </div>
                        <div class="input_box">
                            <label>预算:</label>
                            <select name="budget_range" id="budget_range">
                                <option value="">请选择投资额</option>
                                <option value="1">50-100万</option>
                                <option value="2">110-200万</option>
                                <option value="3">210-300万</option>
                                <option value="4">300万以上</option>
                            </select>
                        </div>
                        <div class="input_box address">
                            <label>地区:</label>
                            <select name="province" id="province">
                                <option value="">省份</option>
                                <option value="上海市">上海市</option>
                            </select>
                            <select name="city" id="city">
                                <option value="">城市</option>
                                <option value="上海市">上海市</option>
                            </select>
                            <select name="area" id="area">
                                <option value="">区县</option>
                                <option value="松江区">松江区</option>
                            </select>
                            <input name="address" id="address" type="text" placeholder="请输入详细街道地址">
                        </div>
                        <div class="input_box">
                            <label>内容:</label>
                            <textarea name="summary" id="summary"></textarea>
                        </div>
                        <div class="input_box checkBox">
                            <input name="agreement" id="agreement" type="checkbox"/>
                            <span>我已阅读并同意 <a href="javascript:;"> 《全球加盟网络服务条款》 </a> </span>
                        </div>
                        <button id="btn_apply" type="button" class="submit">提交留言</button>
                        <!--button id="btn_apply" type="submit" class="submit">提交留言</button-->
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>