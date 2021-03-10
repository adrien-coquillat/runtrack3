numbers = [1, 2, 12, 9, 3, 7]

function tri([numbers]) {



    for (let i = 0; i < 6; i++) {

        console.log(numbers);
        if (numbers[i] > numbers[i + 1]) {
            let saved = numbers[i]
            numbers[i] = numbers[i + 1]
            numbers[i + 1] = saved

            // if (numbers[i + 1] > numbers[i + 2]) {
            //     let saved = numbers[i + 1]
            //     numbers[i + 1] = numbers[i + 2]
            //     numbers[i + 2] = saved

            //     if (numbers[i + 2] > numbers[i + 3]) {
            //         let saved = numbers[i + 2]
            //         numbers[i + 2] = numbers[i + 3]
            //         numbers[i + 3] = saved

            //         if (numbers[i + 3] > numbers[i + 4]) {
            //             let saved = numbers[i + 3]
            //             numbers[i + 3] = numbers[i + 4]
            //             numbers[i + 4] = saved

            //             if (numbers[i + 4] > numbers[i + 5]) {
            //                 let saved = numbers[i + 4]
            //                 numbers[i + 4] = numbers[i + 5]
            //                 numbers[i + 5] = saved


            //                 return [numbers]

            //             }
            //         }
            //     }
            // }
        }
    }
    for (let x = 0; x < 6; x++) {
        if (numbers[x] > numbers[x + 1])
            tri([numbers])
    }
    return [numbers]
}




console.log(tri([numbers]))