@extends('layouts.layout')
@section('content')
    <!--Header Style -->
    <div class="wave -three"></div>
    <div id="spinner"></div>

    <!--app open-->
    <div id="app" class="page">
        <div class="main-wrapper">


            <!--app-content open-->
            <div class="app-content">
                <section class="section">

                    <!--page-header open-->
                    <div class="page-header pt-0">
                        <h4 class="page-title">Data Tables</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="text-light-color">Tables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                        </ol>
                    </div>
                    <!--page-header closed-->

                    <!--row open-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Default Datatables</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example-2"
                                            class="table table-striped table-bordered border-t0 text-nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th class="wd-15p">First name</th>
                                                    <th class="wd-15p">Last name</th>
                                                    <th class="wd-20p">Position</th>
                                                    <th class="wd-15p">Start date</th>
                                                    <th class="wd-10p">Salary</th>
                                                    <th class="wd-25p">E-mail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Bella</td>
                                                    <td>Chloe</td>
                                                    <td>System Developer</td>
                                                    <td>2018/03/12</td>
                                                    <td>$654,765</td>
                                                    <td>b.Chloe@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Donna</td>
                                                    <td>Bond</td>
                                                    <td>Account Manager</td>
                                                    <td>2012/02/21</td>
                                                    <td>$543,654</td>
                                                    <td>d.bond@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Harry</td>
                                                    <td>Carr</td>
                                                    <td>Technical Manager</td>
                                                    <td>20011/02/87</td>
                                                    <td>$86,000</td>
                                                    <td>h.carr@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Lucas</td>
                                                    <td>Dyer</td>
                                                    <td>Javascript Developer</td>
                                                    <td>2014/08/23</td>
                                                    <td>$456,123</td>
                                                    <td>l.dyer@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Karen</td>
                                                    <td>Hill</td>
                                                    <td>Sales Manager</td>
                                                    <td>2010/7/14</td>
                                                    <td>$432,230</td>
                                                    <td>k.hill@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Dominic</td>
                                                    <td>Hudson</td>
                                                    <td>Sales Assistant</td>
                                                    <td>2015/10/16</td>
                                                    <td>$654,300</td>
                                                    <td>d.hudson@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod</td>
                                                    <td>Chandler</td>
                                                    <td>Integration Specialist</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                    <td>h.chandler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jonathan</td>
                                                    <td>Ince</td>
                                                    <td>junior Manager</td>
                                                    <td>2012/11/23</td>
                                                    <td>$345,789</td>
                                                    <td>j.ince@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Leonard</td>
                                                    <td>Ellison</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>2010/03/19</td>
                                                    <td>$205,500</td>
                                                    <td>l.ellison@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Madeleine</td>
                                                    <td>Lee</td>
                                                    <td>Software Developer</td>
                                                    <td>20015/8/23</td>
                                                    <td>$456,890</td>
                                                    <td>m.lee@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Karen</td>
                                                    <td>Miller</td>
                                                    <td>Office Director</td>
                                                    <td>2012/9/25</td>
                                                    <td>$87,654</td>
                                                    <td>k.miller@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Lisa</td>
                                                    <td>Smith</td>
                                                    <td>Support Lead</td>
                                                    <td>2011/05/21</td>
                                                    <td>$342,000</td>
                                                    <td>l.simth@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Morgan</td>
                                                    <td>Keith</td>
                                                    <td>Accountant</td>
                                                    <td>2012/11/27</td>
                                                    <td>$675,245</td>
                                                    <td>m.keith@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Nathan</td>
                                                    <td>Mills</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>2014/10/8</td>
                                                    <td>$765,980</td>
                                                    <td>n.mills@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Ruth</td>
                                                    <td>May</td>
                                                    <td>office Manager</td>
                                                    <td>2010/03/17</td>
                                                    <td>$654,765</td>
                                                    <td>r.may@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Penelope</td>
                                                    <td>Ogden</td>
                                                    <td>Marketing Manager</td>
                                                    <td>2013/5/22</td>
                                                    <td>$345,510</td>
                                                    <td>p.ogden@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Sean</td>
                                                    <td>Piper</td>
                                                    <td>Financial Officer</td>
                                                    <td>2014/06/11</td>
                                                    <td>$725,000</td>
                                                    <td>s.piper@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Trevor</td>
                                                    <td>Ross</td>
                                                    <td>Systems Administrator</td>
                                                    <td>2011/05/23</td>
                                                    <td>$237,500</td>
                                                    <td>t.ross@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Vanessa</td>
                                                    <td>Robertson</td>
                                                    <td>Software Designer</td>
                                                    <td>2014/6/23</td>
                                                    <td>$765,654</td>
                                                    <td>v.robertson@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Una</td>
                                                    <td>Richard</td>
                                                    <td>Personnel Manager</td>
                                                    <td>2014/5/22</td>
                                                    <td>$765,290</td>
                                                    <td>u.richard@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Justin</td>
                                                    <td>Peters</td>
                                                    <td>Development lead</td>
                                                    <td>2013/10/23</td>
                                                    <td>$765,654</td>
                                                    <td>j.peters@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Adrian</td>
                                                    <td>Terry</td>
                                                    <td>Marketing Officer</td>
                                                    <td>2013/04/21</td>
                                                    <td>$543,769</td>
                                                    <td>a.terry@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Cameron</td>
                                                    <td>Watson</td>
                                                    <td>Sales Support</td>
                                                    <td>2013/9/7</td>
                                                    <td>$675,876</td>
                                                    <td>c.watson@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Evan</td>
                                                    <td>Terry</td>
                                                    <td>Sales Manager</td>
                                                    <td>2013/10/26</td>
                                                    <td>$66,340</td>
                                                    <td>d.terry@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Angelica</td>
                                                    <td>Ramos</td>
                                                    <td>Chief Executive Officer</td>
                                                    <td>20017/10/15</td>
                                                    <td>$6,234,000</td>
                                                    <td>a.ramos@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Connor</td>
                                                    <td>Johne</td>
                                                    <td>Web Developer</td>
                                                    <td>2011/1/25</td>
                                                    <td>$92,575</td>
                                                    <td>C.johne@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer</td>
                                                    <td>Chang</td>
                                                    <td>Regional Director</td>
                                                    <td>2012/17/11</td>
                                                    <td>$546,890</td>
                                                    <td>j.chang@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Brenden</td>
                                                    <td>Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>2013/07/14</td>
                                                    <td>$206,850</td>
                                                    <td>b.wagner@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Fiona</td>
                                                    <td>Green</td>
                                                    <td>Chief Operating Officer</td>
                                                    <td>2015/06/23</td>
                                                    <td>$345,789</td>
                                                    <td>f.green@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Shou</td>
                                                    <td>Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>2013/07/19</td>
                                                    <td>$335,300</td>
                                                    <td>s.itou@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michelle</td>
                                                    <td>House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>2016/07/18</td>
                                                    <td>$76,890</td>
                                                    <td>m.house@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Suki</td>
                                                    <td>Burks</td>
                                                    <td>Developer</td>
                                                    <td>2010/11/45</td>
                                                    <td>$678,890</td>
                                                    <td>s.burks@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Prescott</td>
                                                    <td>Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>2014/12/25</td>
                                                    <td>$789,100</td>
                                                    <td>p.bartlett@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin</td>
                                                    <td>Cortez</td>
                                                    <td>Team Leader</td>
                                                    <td>2015/1/19</td>
                                                    <td>$345,890</td>
                                                    <td>g.cortez@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Martena</td>
                                                    <td>Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>2011/03/09</td>
                                                    <td>$324,050</td>
                                                    <td>m.mccray@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Unity</td>
                                                    <td>Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>2014/7/28</td>
                                                    <td>$34,983</td>
                                                    <td>u.butler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Howard</td>
                                                    <td>Hatfield</td>
                                                    <td>Office Manager</td>
                                                    <td>2013/8/19</td>
                                                    <td>$98,000</td>
                                                    <td>h.hatfield@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Hope</td>
                                                    <td>Fuentes</td>
                                                    <td>Secretary</td>
                                                    <td>2015/07/28</td>
                                                    <td>$78,879</td>
                                                    <td>h.fuentes@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Vivian</td>
                                                    <td>Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>2010/02/14</td>
                                                    <td>$452,500</td>
                                                    <td>v.harrell@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Timothy</td>
                                                    <td>Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>20016/12/11</td>
                                                    <td>$136,200</td>
                                                    <td>t.mooney@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jackson</td>
                                                    <td>Bradshaw</td>
                                                    <td>Director</td>
                                                    <td>2011/09/26</td>
                                                    <td>$645,750</td>
                                                    <td>j.bradshaw@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia</td>
                                                    <td>Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>2014/02/03</td>
                                                    <td>$234,500</td>
                                                    <td>o.liang@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno</td>
                                                    <td>Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>2015/05/03</td>
                                                    <td>$163,500</td>
                                                    <td>b.nash@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Sakura</td>
                                                    <td>Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>2010/08/19</td>
                                                    <td>$139,575</td>
                                                    <td>s.yamamoto@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Thor</td>
                                                    <td>Walton</td>
                                                    <td>Developer</td>
                                                    <td>2012/08/11</td>
                                                    <td>$98,540</td>
                                                    <td>t.walton@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Finn</td>
                                                    <td>Camacho</td>
                                                    <td>Support Engineer</td>
                                                    <td>2016/07/07</td>
                                                    <td>$87,500</td>
                                                    <td>f.camacho@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Serge</td>
                                                    <td>Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>2017/04/09</td>
                                                    <td>$138,575</td>
                                                    <td>s.baldwin@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Zenaida</td>
                                                    <td>Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>2018/01/04</td>
                                                    <td>$125,250</td>
                                                    <td>z.frank@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Zorita</td>
                                                    <td>Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>2017/06/01</td>
                                                    <td>$115,000</td>
                                                    <td>z.serrano@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer</td>
                                                    <td>Acosta</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>2017/02/01</td>
                                                    <td>$75,650</td>
                                                    <td>j.acosta@datatables.net</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--row closed-->

                    <!--row open-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Sorted Datatables</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example-1"
                                            class=" table table-striped table-bordered border-t0 text-nowrap w-100">

                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>
                                                <tr>
                                                    <td>Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Rhona Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                </tr>
                                                <tr>
                                                    <td>Colleen Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sonya Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Jena Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>2008/12/19</td>
                                                    <td>$90,560</td>
                                                </tr>
                                                <tr>
                                                    <td>Quinn Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2013/03/03</td>
                                                    <td>$342,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Charde Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>2008/10/16</td>
                                                    <td>$470,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Haley Kennedy</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>2012/12/18</td>
                                                    <td>$313,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Tatyana Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>2010/03/17</td>
                                                    <td>$385,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>2012/11/27</td>
                                                    <td>$198,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Paul Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>New York</td>
                                                    <td>64</td>
                                                    <td>2010/06/09</td>
                                                    <td>$725,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gloria Little</td>
                                                    <td>Systems Administrator</td>
                                                    <td>New York</td>
                                                    <td>59</td>
                                                    <td>2009/04/10</td>
                                                    <td>$237,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Dai Rios</td>
                                                    <td>Personnel Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>35</td>
                                                    <td>2012/09/26</td>
                                                    <td>$217,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenette Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>New York</td>
                                                    <td>30</td>
                                                    <td>2011/09/03</td>
                                                    <td>$345,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Yuri Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Caesar Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                </tr>
                                                <tr>
                                                    <td>Doris Wilder</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Sidney</td>
                                                    <td>23</td>
                                                    <td>2010/09/20</td>
                                                    <td>$85,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Angelica Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>$1,200,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Joyce</td>
                                                    <td>Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>42</td>
                                                    <td>2010/12/22</td>
                                                    <td>$92,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Chang</td>
                                                    <td>Regional Director</td>
                                                    <td>Singapore</td>
                                                    <td>28</td>
                                                    <td>2010/11/14</td>
                                                    <td>$357,650</td>
                                                </tr>
                                                <tr>
                                                    <td>Brenden Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                </tr>
                                                <tr>
                                                    <td>Fiona Green</td>
                                                    <td>Chief Operating Officer (COO)</td>
                                                    <td>San Francisco</td>
                                                    <td>48</td>
                                                    <td>2010/03/11</td>
                                                    <td>$850,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Shou Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>Tokyo</td>
                                                    <td>20</td>
                                                    <td>2011/08/14</td>
                                                    <td>$163,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Michelle House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Sidney</td>
                                                    <td>37</td>
                                                    <td>2011/06/02</td>
                                                    <td>$95,400</td>
                                                </tr>
                                                <tr>
                                                    <td>Suki Burks</td>
                                                    <td>Developer</td>
                                                    <td>London</td>
                                                    <td>53</td>
                                                    <td>2009/10/22</td>
                                                    <td>$114,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Prescott Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>London</td>
                                                    <td>27</td>
                                                    <td>2011/05/07</td>
                                                    <td>$145,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Cortez</td>
                                                    <td>Team Leader</td>
                                                    <td>San Francisco</td>
                                                    <td>22</td>
                                                    <td>2008/10/26</td>
                                                    <td>$235,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Martena Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>Edinburgh</td>
                                                    <td>46</td>
                                                    <td>2011/03/09</td>
                                                    <td>$324,050</td>
                                                </tr>
                                                <tr>
                                                    <td>Unity Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/12/09</td>
                                                    <td>$85,675</td>
                                                </tr>
                                                <tr>
                                                    <td>Howard Hatfield</td>
                                                    <td>Office Manager</td>
                                                    <td>San Francisco</td>
                                                    <td>51</td>
                                                    <td>2008/12/16</td>
                                                    <td>$164,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Hope Fuentes</td>
                                                    <td>Secretary</td>
                                                    <td>San Francisco</td>
                                                    <td>41</td>
                                                    <td>2010/02/12</td>
                                                    <td>$109,850</td>
                                                </tr>
                                                <tr>
                                                    <td>Vivian Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>San Francisco</td>
                                                    <td>62</td>
                                                    <td>2009/02/14</td>
                                                    <td>$452,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Timothy Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>37</td>
                                                    <td>2008/12/11</td>
                                                    <td>$136,200</td>
                                                </tr>
                                                <tr>
                                                    <td>Jackson Bradshaw</td>
                                                    <td>Director</td>
                                                    <td>New York</td>
                                                    <td>65</td>
                                                    <td>2008/09/26</td>
                                                    <td>$645,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2011/02/03</td>
                                                    <td>$234,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011/05/03</td>
                                                    <td>$163,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sakura Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>Tokyo</td>
                                                    <td>37</td>
                                                    <td>2009/08/19</td>
                                                    <td>$139,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Thor Walton</td>
                                                    <td>Developer</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2013/08/11</td>
                                                    <td>$98,540</td>
                                                </tr>
                                                <tr>
                                                    <td>Finn Camacho</td>
                                                    <td>Support Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/07/07</td>
                                                    <td>$87,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Serge Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2012/04/09</td>
                                                    <td>$138,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Zenaida Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>New York</td>
                                                    <td>63</td>
                                                    <td>2010/01/04</td>
                                                    <td>$125,250</td>
                                                </tr>
                                                <tr>
                                                    <td>Zorita Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>56</td>
                                                    <td>2012/06/01</td>
                                                    <td>$115,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Acosta</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>43</td>
                                                    <td>2013/02/01</td>
                                                    <td>$75,650</td>
                                                </tr>
                                                <tr>
                                                    <td>Cara Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Hermione Butler</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2011/03/21</td>
                                                    <td>$356,250</td>
                                                </tr>
                                                <tr>
                                                    <td>Lael Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>
                                                    <td>21</td>
                                                    <td>2009/02/27</td>
                                                    <td>$103,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Jonas Alexander</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>30</td>
                                                    <td>2010/07/14</td>
                                                    <td>$86,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Shad Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>
                                                    <td>51</td>
                                                    <td>2008/11/13</td>
                                                    <td>$183,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>$183,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Donna Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--row closed-->

                    <!--row open-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card export-database">
                                <div class="card-header">
                                    <h4>File export Datatables</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example"
                                            class="table table-bordered border-t0 key-buttons text-nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>
                                                <tr>
                                                    <td>Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Rhona Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                </tr>
                                                <tr>
                                                    <td>Colleen Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sonya Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Jena Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>2008/12/19</td>
                                                    <td>$90,560</td>
                                                </tr>
                                                <tr>
                                                    <td>Quinn Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2013/03/03</td>
                                                    <td>$342,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Charde Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>2008/10/16</td>
                                                    <td>$470,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Haley Kennedy</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>2012/12/18</td>
                                                    <td>$313,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Tatyana Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>2010/03/17</td>
                                                    <td>$385,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>2012/11/27</td>
                                                    <td>$198,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Paul Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>New York</td>
                                                    <td>64</td>
                                                    <td>2010/06/09</td>
                                                    <td>$725,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gloria Little</td>
                                                    <td>Systems Administrator</td>
                                                    <td>New York</td>
                                                    <td>59</td>
                                                    <td>2009/04/10</td>
                                                    <td>$237,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Dai Rios</td>
                                                    <td>Personnel Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>35</td>
                                                    <td>2012/09/26</td>
                                                    <td>$217,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenette Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>New York</td>
                                                    <td>30</td>
                                                    <td>2011/09/03</td>
                                                    <td>$345,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Yuri Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Caesar Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                </tr>
                                                <tr>
                                                    <td>Doris Wilder</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Sidney</td>
                                                    <td>23</td>
                                                    <td>2010/09/20</td>
                                                    <td>$85,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Angelica Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>$1,200,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Joyce</td>
                                                    <td>Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>42</td>
                                                    <td>2010/12/22</td>
                                                    <td>$92,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Chang</td>
                                                    <td>Regional Director</td>
                                                    <td>Singapore</td>
                                                    <td>28</td>
                                                    <td>2010/11/14</td>
                                                    <td>$357,650</td>
                                                </tr>
                                                <tr>
                                                    <td>Brenden Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                </tr>
                                                <tr>
                                                    <td>Fiona Green</td>
                                                    <td>Chief Operating Officer (COO)</td>
                                                    <td>San Francisco</td>
                                                    <td>48</td>
                                                    <td>2010/03/11</td>
                                                    <td>$850,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Shou Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>Tokyo</td>
                                                    <td>20</td>
                                                    <td>2011/08/14</td>
                                                    <td>$163,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Michelle House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Sidney</td>
                                                    <td>37</td>
                                                    <td>2011/06/02</td>
                                                    <td>$95,400</td>
                                                </tr>
                                                <tr>
                                                    <td>Suki Burks</td>
                                                    <td>Developer</td>
                                                    <td>London</td>
                                                    <td>53</td>
                                                    <td>2009/10/22</td>
                                                    <td>$114,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Prescott Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>London</td>
                                                    <td>27</td>
                                                    <td>2011/05/07</td>
                                                    <td>$145,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Cortez</td>
                                                    <td>Team Leader</td>
                                                    <td>San Francisco</td>
                                                    <td>22</td>
                                                    <td>2008/10/26</td>
                                                    <td>$235,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Martena Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>Edinburgh</td>
                                                    <td>46</td>
                                                    <td>2011/03/09</td>
                                                    <td>$324,050</td>
                                                </tr>
                                                <tr>
                                                    <td>Unity Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/12/09</td>
                                                    <td>$85,675</td>
                                                </tr>
                                                <tr>
                                                    <td>Howard Hatfield</td>
                                                    <td>Office Manager</td>
                                                    <td>San Francisco</td>
                                                    <td>51</td>
                                                    <td>2008/12/16</td>
                                                    <td>$164,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Hope Fuentes</td>
                                                    <td>Secretary</td>
                                                    <td>San Francisco</td>
                                                    <td>41</td>
                                                    <td>2010/02/12</td>
                                                    <td>$109,850</td>
                                                </tr>
                                                <tr>
                                                    <td>Vivian Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>San Francisco</td>
                                                    <td>62</td>
                                                    <td>2009/02/14</td>
                                                    <td>$452,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Timothy Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>37</td>
                                                    <td>2008/12/11</td>
                                                    <td>$136,200</td>
                                                </tr>
                                                <tr>
                                                    <td>Jackson Bradshaw</td>
                                                    <td>Director</td>
                                                    <td>New York</td>
                                                    <td>65</td>
                                                    <td>2008/09/26</td>
                                                    <td>$645,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2011/02/03</td>
                                                    <td>$234,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011/05/03</td>
                                                    <td>$163,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sakura Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>Tokyo</td>
                                                    <td>37</td>
                                                    <td>2009/08/19</td>
                                                    <td>$139,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Thor Walton</td>
                                                    <td>Developer</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2013/08/11</td>
                                                    <td>$98,540</td>
                                                </tr>
                                                <tr>
                                                    <td>Finn Camacho</td>
                                                    <td>Support Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/07/07</td>
                                                    <td>$87,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Serge Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2012/04/09</td>
                                                    <td>$138,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Zenaida Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>New York</td>
                                                    <td>63</td>
                                                    <td>2010/01/04</td>
                                                    <td>$125,250</td>
                                                </tr>
                                                <tr>
                                                    <td>Zorita Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>56</td>
                                                    <td>2012/06/01</td>
                                                    <td>$115,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Acosta</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>43</td>
                                                    <td>2013/02/01</td>
                                                    <td>$75,650</td>
                                                </tr>
                                                <tr>
                                                    <td>Cara Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Hermione Butler</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2011/03/21</td>
                                                    <td>$356,250</td>
                                                </tr>
                                                <tr>
                                                    <td>Lael Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>
                                                    <td>21</td>
                                                    <td>2009/02/27</td>
                                                    <td>$103,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Jonas Alexander</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>30</td>
                                                    <td>2010/07/14</td>
                                                    <td>$86,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Shad Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>
                                                    <td>51</td>
                                                    <td>2008/11/13</td>
                                                    <td>$183,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>$183,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Donna Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--row closed-->

                </section>
            </div>
            <!--app-content closed-->

            <!-- Popupchat open-->
            <div class="popup-box chat-popup" id="qnimate">
                <div class="popup-head">
                    <div class="popup-head-left pull-left"><img src="../../assets/img/avatar/avatar-3.jpeg"
                            alt="iamgurdeeposahan" class="mr-2"> Shayan Ahmad</div>
                    <div class="popup-head-right pull-right">
                        <div class="btn-group">
                            <button class="chat-header-button" data-toggle="dropdown" type="button" aria-expanded="false">
                                <i class="glyphicon glyphicon-cog"></i> </button>
                            <ul role="menu" class="dropdown-menu dropdown-menu-right">
                                <li><a href="#">Media</a></li>
                                <li><a href="#">Block</a></li>
                                <li><a href="#">Clear Chat</a></li>
                                <li><a href="#">Email Chat</a></li>
                            </ul>
                        </div>
                        <button data-widget="remove" id="removeClass" class="chat-header-button pull-right"
                            type="button"><i class="glyphicon glyphicon-off"></i></button>
                    </div>
                </div>
                <div class="popup-messages">
                    <div class="direct-chat-messages">
                        <div class="chat-box-single-line">
                            <abbr class="timestamp">December 15th, 2018</abbr>
                        </div>
                        <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name float-left">Shayan Ahmad</span>
                                <span class="direct-chat-timestamp float-right">7:40 Am</span>
                            </div>
                            <img class="direct-chat-img" src="../../assets/img/avatar/avatar-3.jpeg"
                                alt="message user image">
                            <div class="direct-chat-text">
                                Hello. How are you today?
                            </div>
                        </div>
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name float-right">Roberts</span>
                                <span class="direct-chat-timestamp float-left">8:05 Am</span>
                            </div>
                            <img class="direct-chat-img" src="../../assets/img/avatar/avatar-2.jpeg"
                                alt="message user image">
                            <div class="direct-chat-text">
                                I'm fine. Thanks for asking!
                            </div>
                        </div>
                        <div class="chat-box-single-line  mb-3">
                            <abbr class="timestamp">December 14th, 2018</abbr>
                        </div>
                        <div class="direct-chat-msg doted-border">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name float-left">Alica Nestle</span>
                                <span class="direct-chat-timestamp float-right">6:20 Am</span>
                            </div>
                            <img alt="iamgurdeeposahan" src="../../assets/img/avatar/avatar-3.jpeg"
                                class="direct-chat-img"><!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Hey bro, how’s everything going ?
                            </div>
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name float-right">Roberts</span>
                                    <span class="direct-chat-timestamp float-left">7:05 Am</span>
                                </div>
                                <img class="direct-chat-img" src="../../assets/img/avatar/avatar-2.jpeg"
                                    alt="message user image">
                                <div class="direct-chat-text">
                                    Nothing Much!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup-messages-footer">
                    <textarea id="status_message" placeholder="Type a message..." rows="10" cols="40" name="message"></textarea>
                    <div class="btn-footer">
                        <button class="bg_none"><i class="glyphicon glyphicon-film"></i> </button>
                        <button class="bg_none"><i class="glyphicon glyphicon-camera"></i> </button>
                        <button class="bg_none"><i class="glyphicon glyphicon-paperclip"></i> </button>
                        <button class="bg_none pull-right"><i class="glyphicon glyphicon-thumbs-up"></i> </button>
                    </div>
                </div>
            </div>
            <!-- Popupchat closed -->

        </div>
    @endsection