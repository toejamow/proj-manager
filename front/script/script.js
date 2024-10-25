// $(document).ready(() => {
//     $.ajax({
//         url: "hhtp://project-manager-back/",
//         method: "GET",
//         success: (response) => {
//             $("#result").html(response);
//         }, 
//         error: () => {
//             console.log("Error in fetching data");
//             $("#result").html(
//                 "An error occurred while fetching data. Please try again later."
//             );
//         },
//     });
// });

$("document").ready(()=>{
    $("form").submit((event)=>{
        event.preventDefault();
       
$.ajax({
    url:"http://back/users/create",
    method:"POST",
    data: $("form").serialize(),
    success:(response)=>{
        console.log(response);
    },
    error:()=>{
        console.log("Ошибка")
    }
})
    });
})

function autoResize(textarea) {
    textarea.style.height = 'auto'; // Сброс высоты
    textarea.style.height = textarea.scrollHeight + 'px'; // Установить высоту в зависимости от содержимого
}
