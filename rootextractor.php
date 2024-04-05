<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" integrity="sha512-ou/YWnaN7o9J0UZBw3xDUbGBQiKeSIpa9PTKM/bwLJWOr+GFJ7UCXJUjVzBh1Ywnz0g3Ga6rVGm/DV4Cy9kGqA==" crossorigin="anonymous" />
    <link rel="icon" href="assetes/images/tools.png" type="image/png">
    <link rel="stylesheet" href="assetes/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <title>tools</title>
</head>

<body>
    <?php include "topnav.php" ?>
    <?php include "navbar.php" ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <br /> <br />
                <p style="font-size: 22px">
                    Alkhalil root extractor provides the root of each word of a given sentence. It is an indispensable tool for several natural language processing applications such as search engines, text classification and information retrieval. The method of extraction used in this work runs in two steps. The first one consists in seeking of all the possible roots of each word analyzed out of context with the morphological analyzer Alkhalil Morpho Sys 2. Then, we develop in the second step a disambiguation approach based on continuous quadratic splines to choose among these roots the one that corresponds to the word context. We test this method on a representative corpus, and we obtained encouraging results with an accuracy of the order of 96%.


                </p>

                <p style="font-size: 22px">
                    For further details, please check the following paper :
                <ul>
                    <li style="font-size: 22px; color: blue;">M. Boudchiche and A. Mazroui, . “Spline functions for Arabic morphological disambiguation, Applied Computing and Informatics, https://doi.org/10.1016/j.aci.2020.02.002.</li>
                    <li style="font-size: 22px; color: blue;">Boudlal, A., Bebah, M. O. A. O., Lakhouaja, A., Mazroui, A., & Meziane, A. (2011). A Markovian approach for arabic root extraction. Int. Arab J. Inf. Technol., 8(1), 91-98.</li>
                </ul>
                </p>
                <div class="col move-down-top">
    <div class="card-deck equal-card-height">
        <div class="card">
            <div class="card-body text-center">
                <img src="assetes/images/z3-removebg-preview.png" width="23%" class="mb-3">
                <h4 class="card-title">Source</h4>
                <p class="card-text">You have the opportunity to download the <strong>source code</strong> for Root extraction from Alkhalil official website.</p>
                <a href="traitement/ADAT-Racineur.v1.20180101.zip" class="btn btn-primary">Download Source</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body text-center">
                <img src="assetes/images/z2-removebg-preview.png" width="21%" class="mb-3">
                <h4 class="card-title">Jar</h4>
                <p class="card-text">You have the opportunity to download the <strong>JAR file</strong> for Root extraction from Alkhalil official website.</p>
                <a href="traitement/ADAT-Racineur.v1.20180101.jar" class="btn btn-primary">Download JAR</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body text-center">
                <img src="assetes/images/z1-removebg-preview.png" width="20%" class="mb-3">
                <h4 class="card-title">Rest API</h4>
                <p class="card-text">You have the opportunity to download the <strong>REST API</strong> for the Root Extractor.</p>
                <a href="traitement/Rest-API-LemmaRootStem.zip" class="btn btn-primary">Download API</a>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>


        <div class="mb-4"></div>
        <div class="anlyse1 mb-4">
            <div class="nine">
                <h1>ALKHALIL Demo<span>FOR ROOT EXTRACTION MODULE</span></h1>
            </div>
            <div class="img_tl">
                <img src="assetes/images/sty-r.png" alt="" style="width: 10%; height: 10%;">
            </div>
            <!--p class="ppp"> أكتب النص هنا</p-->
            <div class="form-group d-flex flex-column align-items-center justify-content-center">
                <textarea class="form-control" id="myTextarea" rows="3" style="width: 95%;text-align: right;">
        المنظمة العربية للتربية والثقافة والعلوم هي منظمة متخصصة، مقرها تونس، تعمل في نطاق جامعة الدول العربية
     </textarea>
                <button class="btn btn-secondary mt-3" id="cop">analyser</button>
                <div id="loadingIndicator" style="display: none;">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Chargement en cours...</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group mb-4" id="contenuTextarea" style="margin-bottom: 100px;">
            <div class="table-responsive">
                <div id="result">

                </div>
            </div>
        </div>


        <div class="dw mb-4" style="margin-bottom: 400px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="six">
                        <h1 class="mb-3">RESTful Web API Code Snippets<span class="d-block">for AlKhalil Morpho Sys</span></h1>
                        <p class="mb-4">
                            API code examples in popular programming languages such as Java, Python. These code snippets allow
                            you to effectively utilize the API and integrate it into your projects for the AlKhalil Morpho Sys
                            module.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="java-tab" data-toggle="tab" href="#java" role="tab" aria-controls="java" aria-selected="true">Java</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="python-tab" data-toggle="tab" href="#python" role="tab" aria-controls="python" aria-selected="false">Python</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="java" role="tabpanel" aria-labelledby="java-tab">
                                    <div class="inner">
                                        <div class="test-icon text-center">
                                            <span class="icon" id="icon22" style="font-size: 4rem;"><i class="bi bi-filetype-java bi-4x"></i></span> <!-- Java icon -->
                                        </div>
                                        <div class="col-md-12">
                                <pre id="language-java" class="code-block"style="height: 400px; overflow-y: auto;">
                                <code class="language-java">
<span class="token comment">// Get result in text format							</span>
<span class="token keyword">import</span> <span class="token namespace">java<span class="token punctuation">.</span>io<span class="token punctuation">.</span></span><span class="token class-name">BufferedReader</span><span class="token punctuation">;</span>
<span class="token keyword">import</span> <span class="token namespace">java<span class="token punctuation">.</span>io<span class="token punctuation">.</span></span><span class="token class-name">IOException</span><span class="token punctuation">;</span>
<span class="token keyword">import</span> <span class="token namespace">java<span class="token punctuation">.</span>io<span class="token punctuation">.</span></span><span class="token class-name">InputStreamReader</span><span class="token punctuation">;</span>
<span class="token keyword">import</span> <span class="token namespace">java<span class="token punctuation">.</span>net<span class="token punctuation">.</span></span><span class="token class-name">HttpURLConnection</span><span class="token punctuation">;</span>
<span class="token keyword">import</span> <span class="token namespace">java<span class="token punctuation">.</span>net<span class="token punctuation">.</span></span>URL<span class="token punctuation">;</span>
<span class="token keyword">import</span> <span class="token namespace">java<span class="token punctuation">.</span>nio<span class="token punctuation">.</span>charset<span class="token punctuation">.</span></span><span class="token class-name">StandardCharsets</span><span class="token punctuation">;</span>
<span class="token keyword">import</span> <span class="token namespace">java<span class="token punctuation">.</span>net<span class="token punctuation">.</span></span><span class="token class-name">URLEncoder</span><span class="token punctuation">;</span>

<span class="token keyword">public</span> <span class="token keyword">class</span> <span class="token class-name">Exemple</span> <span class="token punctuation">{</span>

    <span class="token keyword">public</span> <span class="token keyword">static</span> <span class="token keyword">void</span> <span class="token function">main</span><span class="token punctuation">(</span><span class="token class-name">String</span><span class="token punctuation">[</span><span class="token punctuation">]</span> args<span class="token punctuation">)</span> <span class="token keyword">throws</span> <span class="token class-name">IOException</span> <span class="token punctuation">{</span>
        <span class="token class-name">String</span> url <span class="token operator">=</span> <span class="token string">"http://oujda-nlp-team.net:8080/api/Racine/"</span><span class="token punctuation">;</span>
        <span class="token class-name">String</span> text <span class="token operator">=</span> <span class="token string">"##################################"</span><span class="token punctuation">;</span>
        <span class="token comment">// Encodes the text parameter to be included in the URL</span>
        <span class="token class-name">String</span> encodedText <span class="token operator">=</span> <span class="token class-name">URLEncoder</span><span class="token punctuation">.</span><span class="token function">encode</span><span class="token punctuation">(</span>text<span class="token punctuation">,</span> <span class="token class-name">StandardCharsets</span><span class="token punctuation">.</span>UTF_8<span class="token punctuation">.</span><span class="token function">toString</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
        <span class="token comment">// Constructs the complete API URL with the encoded text parameter</span>
        <span class="token class-name">String</span> apiUrl <span class="token operator">=</span> url <span class="token operator">+</span> encodedText<span class="token punctuation">;</span>
        <span class="token comment">// Creates the URL object</span>
        <span class="token class-name">URL</span> apiURL <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token function">URL</span><span class="token punctuation">(</span>apiUrl<span class="token punctuation">)</span><span class="token punctuation">;</span>
        <span class="token comment">// Opens the connection</span>
        <span class="token class-name">HttpURLConnection</span> connection <span class="token operator">=</span> <span class="token punctuation">(</span><span class="token class-name">HttpURLConnection</span><span class="token punctuation">)</span> apiURL<span class="token punctuation">.</span><span class="token function">openConnection</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
        connection<span class="token punctuation">.</span><span class="token function">setRequestMethod</span><span class="token punctuation">(</span><span class="token string">"GET"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
        connection<span class="token punctuation">.</span><span class="token function">setRequestProperty</span><span class="token punctuation">(</span><span class="token string">"Content-Type"</span><span class="token punctuation">,</span> <span class="token string">"application/json"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
        <span class="token comment">// Reads the response from the API</span>
        <span class="token keyword">try</span> <span class="token punctuation">(</span><span class="token class-name">BufferedReader</span> reader <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">BufferedReader</span><span class="token punctuation">(</span><span class="token keyword">new</span> <span class="token class-name">InputStreamReader</span><span class="token punctuation">(</span>connection<span class="token punctuation">.</span><span class="token function">getInputStream</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">)</span> <span class="token punctuation">{</span>
            <span class="token class-name">StringBuilder</span> response <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">StringBuilder</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
            <span class="token class-name">String</span> line<span class="token punctuation">;</span>
            <span class="token keyword">while</span> <span class="token punctuation">(</span><span class="token punctuation">(</span>line <span class="token operator">=</span> reader<span class="token punctuation">.</span><span class="token function">readLine</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">)</span> <span class="token operator">!=</span> <span class="token keyword">null</span><span class="token punctuation">)</span> <span class="token punctuation">{</span>
                response<span class="token punctuation">.</span><span class="token function">append</span><span class="token punctuation">(</span>line<span class="token punctuation">)</span><span class="token punctuation">;</span>
            <span class="token punctuation">}</span>
            <span class="token comment">// Prints the response</span>
            <span class="token class-name">System</span><span class="token punctuation">.</span>out<span class="token punctuation">.</span><span class="token function">println</span><span class="token punctuation">(</span>response<span class="token punctuation">.</span><span class="token function">toString</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
        <span class="token punctuation">}</span> <span class="token keyword">finally</span> <span class="token punctuation">{</span>
            <span class="token comment">// Disconnects the connection</span>
            connection<span class="token punctuation">.</span><span class="token function">disconnect</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
        <span class="token punctuation">}</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">}</span>
<span class="token comment">/*
// Get result in JSON format

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.UnsupportedEncodingException;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;
import java.net.URLEncoder;
import java.nio.charset.StandardCharsets;

public class Exemple {

    public static void main(String[] args) {
        try {
            String baseUrl = "http://oujda-nlp-team.net:8080/api/ApiRacine/";
            String text = "##################################";
            // Encodes the text parameter to be included as a query parameter
            String encodedText = URLEncoder.encode(text, StandardCharsets.UTF_8.toString());
            String apiUrl = baseUrl + "?textinput=" + encodedText;

            URL apiURL = new URL(apiUrl);
            HttpURLConnection connection = (HttpURLConnection) apiURL.openConnection();
            connection.setRequestMethod("POST");
            connection.setRequestProperty("Content-Type", "application/json");

            try (BufferedReader reader = new BufferedReader(new InputStreamReader(connection.getInputStream()))) {
                StringBuilder response = new StringBuilder();
                String line;
                while ((line = reader.readLine()) != null) {
                    response.append(line);
                }
                System.out.println(response.toString());
            } finally {
                connection.disconnect();
            }
        } catch (UnsupportedEncodingException | MalformedURLException e) {
            e.printStackTrace();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
*/</span>						
						</code>
                                </pre>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="python" role="tabpanel" aria-labelledby="python-tab">
                            <div class="code-wrapper">
                                <div class="test-icon text-center">
                                    <span class="icon" id="icon1" style="font-size: 4rem;"><i class="bi bi-filetype-py bi-4x"></i></span> <!-- Python icon -->
                                </div>
                                <div class="col-md-8 center-block">
                                <pre id="language-python" class="code-block" style="font-size: 0.9em; line-height: 1.5; overflow-x: auto;">
                                <code class="language-python" style="position: relative;right: -12% !important;">
<span class="token keyword">import</span> requests

<span class="token comment"># Get result in text format</span>
url <span class="token operator">=</span> <span class="token string">"http://oujda-nlp-team.net:8080/api/Racine"</span>
text_input <span class="token operator">=</span> <span class="token string">"##############################"</span>

data <span class="token operator">=</span> <span class="token punctuation">{</span><span class="token string">"textinput"</span><span class="token punctuation">:</span> text_input<span class="token punctuation">}</span>
response <span class="token operator">=</span> requests<span class="token punctuation">.</span>post<span class="token punctuation">(</span>url<span class="token punctuation">,</span> data<span class="token operator">=</span>data<span class="token punctuation">)</span>

<span class="token keyword">if</span> response<span class="token punctuation">.</span>status_code <span class="token operator">==</span> <span class="token number">200</span><span class="token punctuation">:</span>
    result <span class="token operator">=</span> response<span class="token punctuation">.</span>text
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f"Result in text format: </span><span class="token interpolation"><span class="token punctuation">{</span>result<span class="token punctuation">}</span></span><span class="token string">"</span></span><span class="token punctuation">)</span>
<span class="token keyword">else</span><span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">"Error during API request."</span><span class="token punctuation">)</span>

<span class="token comment"># Get result in JSON format</span>
<span class="token comment"># text = "##############################"</span>
<span class="token comment"># url = "http://oujda-nlp-team.net:8080/api/ApiRacine/" + text</span>
<span class="token comment"># response = requests.get(url)</span>
<span class="token comment"># if response.status_code == 200:</span>
<span class="token comment">#     result = response.text</span>
<span class="token comment">#     print(f"Result in JSON format: {result}")</span>
<span class="token comment"># else:</span>
<span class="token comment">#     print("Error during API request.")								</span>
								</code>
                                </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


        <div onclick="scrollToTop()" class="scrollTop">↑
        </div>
    </div>

    <?php include "footer.php" ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="assetes/js/script2.js"></script>
    <script src="assetes/js/root.js"></script>
    <script src="assetes/js/main.js"></script>

</body>

</html>