const size = 150 - 3;
const newsContent = document.querySelectorAll(".news-content");
for (let cont = 0; cont < newsContent.length; cont++) {
    const element = newsContent[cont];
    let text = element.textContent;
    let tripldot = text.length > size ?  "..." : "";
    text = text.substring(0, size);
    element.textContent = text+tripldot;

}