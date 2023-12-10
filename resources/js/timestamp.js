function updateTimeStamps(){
    const timestamps = document.querySelectorAll('[data-timestamp]');

    timestamps.forEach((element) => {
        const originalTimestamp = element.getAttribute('data-timestamp');
        const timeDiff = Math.floor((Date.now() / 1000) - originalTimestamp);
        element.textContent = formatTimeDiff(timeDiff) + ' ago';
    });
}


function formatTimeDiff(diffInSeconds){
    const minutes = Math.floor(diffInSeconds / 60);
    const hours = Math.floor(minutes / 60);
    const days = Math.floor(hours / 24);

    if(days > 0 ) return `${days} days ${hours % 24} hours ${minutes % 60} minutes`;
    if(hours > 0 ) return `${hours} hours ${minutes % 60} minutes`;
    if(minutes > 0 ) return `${minutes} minutes ${diffInSeconds % 60} seconds`;
    return `${diffInSeconds} seconds`;
}


setInterval(updateTimeStamps, 1000);

document.addEventListener('DOMContentLoaded', updateTimeStamps);
