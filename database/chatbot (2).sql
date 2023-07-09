-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 09, 2023 lúc 06:54 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `chatbot`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `answer`
--

CREATE TABLE `answer` (
  `id_answer` int(10) UNSIGNED NOT NULL,
  `question_list` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `answer`
--

INSERT INTO `answer` (`id_answer`, `question_list`, `answer`, `created_at`, `updated_at`) VALUES
(1, '|dai hoc cong nghe giao thong van tai|utt|truong|', 'Trường Đại học Công nghệ Giao thông Vận tải (tên tiếng Anh: University Of Transport Technology, tên viết tắt: UTT) là trường Đại học công lập được nâng cấp năm 2011 từ Trường Cao đẳng giao thông vận tải- trực thuộc Bộ Giao thông Vận tải[1]. Tiền thân là trường Cao đẳng Công chính, được thành lập ngày 15/11/1945. Trường đào tạo đa ngành, đa lĩnh vực về công nghệ kỹ thuật giao thông, công nghệ kỹ thuật cơ khí, ô tô, kinh tế, vận tải, logistics, công nghệ thông tin, điện tử viễn thông, môi trường... theo định hướng ứng dụng phục vụ ngành GTVT và các ngành kinh tế quốc dân. Năm 2016, Trường được Thủ tướng Chính phủ quy hoạch phát triển thành trường đại học trọng điểm Quốc gia; năm 2017 trường là 1 trong 15 trường đại học đầu tiên của Việt Nam được công nhận đạt tiêu chuẩn chất lượng giáo dục đại học.', '2023-04-02 20:38:38', '2023-07-08 11:00:06'),
(4, '|noi quy|dai hoc cong nghe giao thong van tai|utt|', '1. Sinh viên khi đến Trường phải đeo “Thẻ sinh viên”, sinh viên không đeo thẻ không được vào Trường, lớp học, giảng đường.\n\n2. Trang phục gọn gàng, lịch sự.\n\n3. Sinh viên ra, vào lớp phải đúng giờ quy định. Chỉ những sinh viên có tên trong danh sách lớp, môn học mới được tham dự lớp học.\n\n4. Khi Giảng viên vào lớp sinh viên phải đứng dậy chào. Trong lớp phải nghiêm túc trật tự nghe giảng. Giúp đỡ đối xử hòa nhã với bạn bè. Không có hành vi, lời nói vô lễ với cán bộ, giảng viên, nhân viên Nhà trường. Không viết và nói những điều sai sự thật làm ảnh hưởng đến uy tín Nhà trường. Không gây rối làm ảnh hưởng tới công tác giảng dạy của giảng viên, các hoạt động của Nhà trường.\n\n5. Không sử dụng điện thoại, không chơi Game trong lớp học và phòng thi. Không chơi bài bạc dưới mọi hình thức.\n\n6. Không có những hành vi thiếu văn hóa như nói tục, cãi nhau, làm ồn ào mất trật tự ở nơi đông người như ở hội trường, lớp học, giảng đường, thư viện, căng tin…Nghiêm cấm không mang bất kỳ vật dụng nào có thể làm hung khí đánh nhau vào Trường.\n\n7. Hết giờ học trước khi ra khỏi lớp, sinh viên phải tự giác kê lại bàn ghế ngay ngắn, đúng vị trí, tắt đèn, tắt quạt, đóng cửa…\n\n8. Không dùng bút, vật sắc nhọn để viết, vẽ, rạch lên bàn ghế, bảng, tường, rèm cửa trong phòng học, giảng đường, hội trường, thư viện, căng tin, khu vệ sinh… làm hư hỏng tài sản của Nhà trường. Không chạy nhảy hoặc ngồi lên bàn; không đạp chân lên tường và lan can, hành lang lớp học. Không tự động di chuyển bàn ghế từ phòng này sang phòng khác.\n\n9. Phải có trách nhiệm bảo vệ môi trường cảnh quan, cây xanh, chậu cảnh trong khuôn viên Nhà trường. Phải giữ gìn vệ sinh chung; không vứt rác làm mất vệ sinh trong khuôn viên Trường.\n\n10. Không hút thuốc lá, ăn kẹo cao su, ăn quà bánh, cơm, cà phê…trong phòng học, giảng đường, hội trường, thư viện.\n\nNếu vi phạm các quy định trên đây tùy theo mức độ sinh viên sẽ phải bồi thường thiệt hại hoặc chịu các hình thức kỷ luật từ khiển trách đến buộc thôi học.', '2023-06-13 03:36:04', '2023-06-21 15:47:01'),
(6, '|noi quy|dai hoc cong nghe giao thong van tai|utt|quy dinh|mien thi tieng anh|mien thi ngoai ngu|mien tieng anh|mien ngoai ngu|thong tin|', 'Điều 1. Phạm vi và Đối tượng áp dụng\n1. Văn bản này quy định về điều kiện, quy trình, thủ tục miễn học phần Tiếng Anh cơ bản và quy đổi điểm đối với sinh viên dại học hệ chính quy của trường Đại học Công nghệ giao thông vận tải.\n2. Quy định được áp dụng đối với sinh viên K72 (tuyển sinh từ năm 2022) trở về sau.\n3. Quy định này không áp dụng với sinh viên đào tạo văn bằng 2.\nĐiều 2. Điều kiện xét miễn học, miễn thi và quy đổi điểm tương ứng\nSinh viên có một trong các chứng chỉ dưới đây sẽ được miễn học phần Tiếng Anh cơ bản với mức quy đổi điểm tương ứng sau:\n* IELTS (4.5 - 5.0), TOEIC (450 - 595), TOEFL ITP (450 - 499), TOEFL (30 - 45), CAMBRIDGE TESTS (140 - 159), APTIS (B1), PTE (Level 3) sẽ tương ứng điểm tổng kết học phần sẽ quy đổi thành 8 (theo thang điểm 10).\n* IELTS (5.5 - 6.5), TOEIC (600 - 845), TOEFL ITP (500 - 626), TOEFL (46 - 93), CAMBRIDGE TESTS (160 - 179), APTIS (B2), PTE (Level 4) sẽ tương ứng điểm tổng kết học phần sẽ quy đổi thành 9 (theo thang điểm 10).\n* IELTS (7.0 - 9.0), TOEIC (850  - 990), TOEFL ITP (627 - 677), TOEFL (94 - 120), CAMBRIDGE TESTS (180 - 230), APTIS (C1 - C2), PTE (Level 5-6) sẽ tương ứng điểm tổng kết học phần sẽ quy đổi thành 10 (theo thang điểm 10) .\n* Lưu ý:\n(1). Là các chứng chỉ do các đơn vị đủ điều kiện tổ chức thi và cấp chứng chỉ theo quy định hiện hành của Bộ Giáo dục và Đào tạo.\n(2). Là các chứng chỉ được liệt kê trong bảng quy đổi.\nĐiều 3. Thủ tục xin miễn học phần\nSinh viên thỏa mãn các điều kiện theo Điều 2, nếu có nhu cầu cần phải nộp về phòng Đào tạo 21 ngày trước khi bắt đầu học kỳ có đăng ký học phần này. Hồ sơ bao gồm: \n- Đơn theo mẫu (phụ lục 1)\n- Bản sao công chứng chứng chỉ ngoại ngữ, (Lưu ý: Khi nộp, sinh viên cần tình bản gốc điểm kiểm tra, đối chiếu và phải có hiệu lực trong thời điểm xét miễn học).\nĐiều 4. Quy trình\n1. Tập hợp đơn, lập d/s sinh viên miễn học: Trong thời hạn 21 ngày trước khi bắt đầu học kỳ (đơn vị phụ trách: phòng Đào tạo).\n2. Thẩm định hồ sơ, chứng chỉ: Trong thời hạn 15 ngày trước khi bắt đầu học kỳ (đơn vị phụ trách: phòng Đào tạo).\n3. Tổng hợp kết quả, trình Hội đồng với sinh viên hợp lệ: Trong thời hạn 15 ngày trước khi bắt đầu học kỳ (đơn vị phụ trách: phòng Đào tạo).\n4. Tổ chức xét miễn học phần và trình Hiệu trưởng công nhận miễn học phần: Trong thời hạn 10 ngày trước khi bắt đầu học kỳ (đơn vị phụ trách: Hội đồng Xét miễn HP TACB và quy đổi điểm).\n5. Ra quyết định miễn học phần: Trong thời hạn 7 ngày trước khi bắt đầu học kỳ (đơn vị phụ trách: Hiệu trưởng).\nĐiều 5. Tổ chức thực hiện\n- Phòng Đào tạo chủ trì, phối hợp với các đơn vị liên quan hướng dẫn và triển khai thực hiện Quy định này đến cán bộ, giảng viên và sinh viên của Trường.\n- Trong quá trình triển khai thực hiện, nếu có vấn đề chưa phù hợp, các đơn vị đề xuất với Nhà trường (phòng Đào tạo) để điều chỉnh, bổ sung cho phù hợp.\n* Lưu ý: Đơn xin miễn học phần TACB trên đường dẫn: https://utt.edu.vn/ct-sv/noi-quy-quy-che/quy-dinh-ve-mien-hoc-phan-tieng-anh-co-ban-va-quy-doi-diem-doi-voi-sinh-vien-dai-hoc-he-chinh-quy-a14213.html', '2023-06-13 04:48:54', '2023-07-08 11:00:23'),
(7, '|noi quy|dai hoc cong nghe giao thong van tai|utt|quy dinh|thi tieng anh|danh gia|thi ngoai ngu|noi bo|', 'Điều 1. Phạm vi, đối tượng áp dụng \n\n1. Văn bản này quy định về tổ chức kiểm tra đánh giá, phân loại trình độ ngoại ngữ theo chuẩn đầu ra; điều kiện miễn thi ngoại ngữ trước khi tốt nghiệp đối với sinh viên đào tạo theo hệ thống tín chỉ tại Trường Đại học Công nghệ GTVT. \n\n2. Xác định nội dung, phương pháp tổ chức thi đánh giá năng lực ngoại ngữ đáp ứng chuẩn đầu ra tại Trường Đại học Công nghệ GTVT. \n\n3. Quy định này quy định về ngoại ngữ được đào tạo tại Trường Đại học Công nghệ GTVT là tiếng Anh. Đối với lưu học sinh, ngoài tiếng Anh có thể lựa chọn tiếng Việt làm ngoại ngữ chính. \n\nĐiều 2. Mục đích, nguyên tắc \n\n1. Thi đánh giá trình độ tiếng Anh nội bộ của Trường để kiểm tra sát hạch trình độ tiếng Anh của sinh viên, làm cơ sở xác định điều kiện tốt nghiệp cho sinh viên theo quy chế đào tạo đại học hiện hành. \n\n2. Việc tổ chức thi đánh giá trình độ tiếng Anh nội bộ của Trường phải đảm bảo nguyên tắc đúng quy chế, trung thực, chính xác, khách quan, minh bạch, phản ánh đúng năng lực tiếng Anh của người học. \n\nĐiều 3. Căn cứ xây dựng quy định \n\n- Chỉ thị số 3575/CT-BGDĐT ngày 10/9/2014 của Bộ Trưởng Bộ GD&ĐT về việc tăng cường triển khai dạy và học ngoại ngữ trong hệ thống giáo dục quốc dân; \n\n- Quyết định số 2080/QĐ-TTg ngày 22/12/2017 của Thủ tướng Chính phủ phê duyệt điều chỉnh, bổ sung Đề án dạy và học ngoại ngữ trong hệ thống giáo dục quốc dân giai đoạn 2017-2025; \n\n- Quy chế thi đánh giá năng lực ngoại ngữ theo Khung năng lực ngoại ngữ 6 bậc dùng cho Việt Nam Ban hành kèm theo Thông tư 23/2017/TT-BGDĐT ngày 29/9/2017 của Bộ trưởng Bộ Giáo dục và Đào tạo. \n\n- Quy chế đào tạo đại học chính quy theo hệ thống tín chỉ ban hành kèm theo Quyết định số 2414/QĐ-ĐHCNGTVT ngày 08/8/2018 của Hiệu trưởng Trường Đại học Công nghệ GTVT; \n\n-  Quy định chuẩn đầu ra trình độ ngoại ngữ của sinh viên đại học hệ chính quy tại Trường Đại học Công nghệ GTVT ban hành kèm theo Quyết định số 299/QĐ-ĐHCNGTVT ngày 18/01/2021 của Hiệu trưởng Trường Đại học Công nghệ GTVT. \n\nĐiều 4. Chuẩn đầu ra  \n\nThực hiện theo Điều 2 thuộc Quy định Chuẩn đầu ra trình độ Ngoại ngữ của sinh viên đại học chính quy tại Trường Đại học Công nghệ Giao thông vận tải ban hành kèm theo Quyết định số 299/QĐ-ĐHCNGTVT ngày 18 tháng 01 năm 2021 của Trường Đại học Công nghệ GTVT. \n\nĐiều 5. Hội đồng đánh giá trình độ tiếng Anh nội bộ của Trường Đại học Công nghệ GTVT và các ban giúp việc \n\n1. Hội đồng thi và các ban của Hội đồng thi: \n\na) Các thành viên của Hội đồng thi gồm: Chủ tịch Hội đồng thi là Phó Hiệu trưởng phụ trách đào tạo; Phó Chủ tịch Hội đồng thi và các ủy viên Hội đồng thi là người của đơn vị tổ chức thi, đơn vị phối hợp (nếu có); cán bộ thanh tra; \n\nb) Các ban của Hội đồng thi gồm: Ban Thư ký; Ban Đề thi; Ban In sao đề thi; Ban Coi thi; Ban Chấm thi; Ban Phúc khảo (nếu có đơn đề nghị phúc khảo). Thành viên các ban được chọn trong số cán bộ quản lý; giáo viên; giảng viên; những người làm nhiệm vụ giám sát, bảo vệ an toàn thi; kỹ thuật viên, nhân viên y tế, phục vụ có đủ trình độ chuyên môn, nghiệp vụ và kinh nghiệm trong công tác thi. \n\n 2. Chủ tịch Hội đồng thi, Phó Chủ tịch Hội đồng thi, ủy viên Hội đồng thi và thành viên các ban của Hội đồng thi phải là người có trình độ chuyên môn, nghiệp vụ tốt, không có người thân (cha, mẹ, vợ, chồng, con đẻ, con nuôi, anh chị em ruột, anh chị em ruột vợ hoặc chồng) là thí sinh tham dự kỳ thi tại Hội đồng thi. \n\n3. Hội đồng thi tự giải thể sau khi hoàn thành nhiệm vụ. \n\nĐiều 6. Nhiệm vụ của Hội đồng thi và các ban của Hội đồng thi \n\n1. Hội đồng thi \n\na) Chủ tịch Hội đồng thi: \n\n- Điều hành các công việc của Hội đồng thi; \n\n- Ký duyệt danh sách thí sinh đăng ký dự thi; \n\n- Tiếp nhận, quản lý và bảo mật đề thi, đáp án, hướng dẫn chấm; \n\n- Quy định việc làm phách bài thi bảo đảm an toàn, bảo mật; \n\n- Ký duyệt kết quả thi và danh sách thí sinh dự thi đạt yêu cầu, uỷ quyền cho trưởng phòng Đào tạo cấp chứng nhận cho các sinh viên có kết quả đạt từ 450 trở lên; \n\n- Quyết định các hình thức kỷ luật đối với các đối tượng vi phạm Quy chế thi.  \n\nb) Phó Chủ tịch Hội đồng thi thực hiện các nhiệm vụ được Chủ tịch Hội đồng thi phân công và thay mặt Chủ tịch Hội đồng thi giải quyết công việc khi được Chủ tịch Hội đồng thi uỷ quyền; \n\nc) Các ủy viên Hội đồng thi chấp hành phân công của lãnh đạo Hội đồng thi. \n\n2. Ban Đề thi \n\na) Tổ chức biên soạn bộ đề thi theo yêu cầu tổ chức thi; \n\nb) Chuyển giao đề thi đã được niêm phong cho Chủ tịch Hội đồng thi; \n\nc) Thành viên Ban đề thi chịu trách nhiệm về toàn bộ nội dung, đảm bảo bí mật, an toàn của đề thi theo đúng chức trách của mình theo quy định hiện hành, những người trong Ban đề thi có tiếp xúc với nội dung đề thi phải được cách ly triệt để từ khi bắt đầu làm việc cho đến hết thời gian làm bài thi. \n\n3. Ban In sao đề thi  \n\na) In sao đề thi đảm bảo nguyên tắc bí mật, an toàn của đề thi theo đúng chức trách của mình theo quy định hiện hành về bảo vệ bí mật nhà nước độ Tối mật; \n\nb) Sau khi in sao xong số lượng theo yêu cầu, chuyển giao đề thi cho Chủ tịch Hội đồng thi hoặc Ban Coi thi khi được Chủ tịch Hội đồng thi phân công; \n\nc) Những người trong Ban In sao đề thi có tiếp xúc với nội dung đề thi phải được cách ly triệt để từ khi bắt đầu làm việc cho đến hết thời gian làm bài thi. \n\n4. Ban Coi thi: \n\na) Những công việc chung: \n\n- Bố trí đủ lực lượng coi thi, bảo vệ phòng thi, đảm bảo an toàn cho kỳ thi và bài làm của thí sinh; phân công nhiệm vụ cụ thể cho từng thành viên của Ban Coi thi; \n\n- Tổ chức, quản lý, giám sát thí sinh theo đúng lịch thi, nội quy phòng thi.  \n\nb) Đối với thi trên giấy: \n\n- Tiếp nhận, bảo quản, sử dụng đề thi theo hướng dẫn; \n\n- Thu nhận bài thi, niêm phong bài thi, hồ sơ thi, lập biên bản bàn giao cho Ban Thư ký  \n\n5. Ban Chấm thi: \n\na) Tiếp nhận toàn bộ bài thi, hồ sơ thi do Ban Thư ký bàn giao và bảo quản trong thời gian chấm thi; \n\nb) Tổ chức chấm thi theo đúng hướng dẫn, đáp án, thang điểm; \n\nc) Nộp bài thi và bảng điểm theo số phách cho Ban Thư ký để tổng hợp kết quả. \n\n6. Ban Phúc khảo: \n\na) Tổ chức chấm lại bài thi theo văn bản hướng dẫn chấm, đảm bảo nguyên tắc hai cán bộ chấm thi chấm độc lập trên một bài thi; \n\nb) Lập các biên bản, danh sách thí sinh với kết quả điểm phúc khảo và trình Chủ tịch Hội đồng thi phê duyệt. \n\n7. Ban Thư ký: \n\na) Giúp Hội đồng thi soạn thảo các văn bản, lập các biểu bảng cần thiết, xây dựng cơ sở dữ liệu thí sinh dự thi, ghi biên bản các cuộc họp của Hội đồng thi; \n\nb) Nhận bài thi từ Ban Coi thi; bảo quản, kiểm kê bài thi; đối chiếu chữ ký niêm phong trên túi đựng bài thi của cán bộ coi thi hoặc cán bộ chấm thi với chữ ký trên phiếu thu bài thi và bài làm của thí sinh; đánh số phách, cắt phách; niêm phong, bảo quản phần phách; \n\nc) Giao bài thi đã cắt phách cho Ban Chấm thi; hồi phách, lên điểm; lập biểu thống kê kết quả thi của thí sinh.  \n\nd) Tổng hợp, phân tích kết quả thi; kiến nghị về sự bất thường trong kết quả thi (nếu có), đề xuất Chủ tịch Hội đồng thi xử lý; \n\nđ) Trình Chủ tịch Hội đồng thi kết quả thi. \n\nĐiều 7. Đối tượng dự thi đánh giá trình độ tiếng Anh nội bộ của Trường Đại học Công nghệ GTVT  \n\nSinh viên đại học hệ chính quy của Trường Đại học Công nghệ Giao thông vận tải có nhu cầu được đánh giá năng lực ngoại ngữ.  \n\nĐiều 8. Hình thức thi, đề thi, địa điểm tổ chức thi đánh giá trình độ tiếng Anh nội bộ của Trường Đại học Công nghệ GTVT  \n\n Hình thức thi: Theo dạng chuẩn TOEIC \n\n2. Đề thi, đáp án, hướng dẫn chấm thi phải đáp ứng các yêu cầu sau: \n\na) Đề thi đảm bảo đánh giá được các kỹ năng nghe, đọc; \n\nb) Các câu hỏi thi và đề thi được xây dựng theo chuẩn TOEIC, ngoài phần kiến thức chung, đề thi được bổ sung thêm một số câu hỏi liên quan đến các khối ngành mà Trường đang tổ chức đào tạo (Xem chi tiết tại phụ lục đính kèm); \n\nc) Đề thi, đáp án, hướng dẫn chấm thi phải được bảo mật trước, trong và sau khi thi. \n\n3) Địa điểm thi: Tại Trường Đại học Công nghệ GTVT. \n\nĐiều 9. Tổ chức thi đánh giá trình độ tiếng Anh nội bộ của Trường Đại học Công nghệ GTVT  \n\na) Công tác chuẩn bị: \n\n- Phòng Đào tạo lập danh sách phòng thi, bố trí phòng thi và thông báo cho sinh viên trước kỳ thi ít nhất 05 ngày;  \n\n- Trước ngày thi 01 ngày, Hội đồng thi và Ban coi thi kiểm tra các điều kiện tổ chức thi đảm bảo các yêu cầu sau: \n\n+ Khu vực thi phải được bố trí an toàn, yên tĩnh; phải đảm bảo có hệ thống âm thanh, ánh sáng đạt chất lượng theo yêu cầu; \n\n+ Các thí sinh trong phòng thi được bố trí ngồi số báo danh và theo quy tắc bố trí sơ đồ phòng thi ngẫu nhiên theo từng buổi thi. \n\nb) Quy trình coi thi: \n\n- Trước giờ thi: Ban coi thi kiểm tra nguồn điện; kiểm tra âm thanh; gọi thí sinh vào phòng thi, kiểm tra giấy tờ tùy thân; đảm bảo thí sinh ngồi đúng vị trí; ký tên vào các tờ giấy nháp và phát cho thí sinh; phổ biến quy chế thi cho thí sinh, nhắc nhở thí sinh không được phép viết vào quyển đề thi; hướng dẫn thí sinh các điểm cần lưu ý trong thời gian thi; \n\n- Khi có hiệu lệnh: cán bộ coi thi phát đề cho từng thí sinh. \n\n- Trong thời gian làm bài thi:  \n\nCán bộ coi thi giám sát chặt chẽ phòng thi; kiểm tra lại giấy tờ tùy thân của thí sinh, vị trí ngồi của thí sinh; không cho thí sinh trao đổi, bàn bạc, có hành vi gian lận trong phòng thi; cán bộ coi thi không được đọc đề thi, không tự ý trao đổi với thí sinh về nội dung đề thi, không cho thí sinh sao chép câu hỏi thi, đề thi dưới bất kỳ hình thức nào; trường hợp cần phải cho thí sinh ra ngoài phòng thi, cán bộ coi thi chỉ cho từng thí sinh ra ngoài và báo cho cán bộ giám sát ngoài phòng thi; trường hợp có thí sinh vi phạm Quy chế thi, cán bộ coi thi lập biên bản và báo cáo Trưởng Ban Coi thi để có biện pháp xử lý thích hợp, kịp thời. Cán bộ giám sát ngoài phòng thi có trách nhiệm giám sát thí sinh, giám sát cán bộ coi thi, kỹ thuật viên trong phòng thi tại khu vực được Trưởng Ban Coi thi phân công; đồng thời giám sát thí sinh ra ngoài phòng thi (nếu có) và không cho phép thí sinh tiếp xúc với người khác. \n\nc) Sinh viên và cán bộ tham gia kì thi vi phạm quy chế bị xử lý theo quy định hiện hành của Trường Đại học Công nghệ GTVT. \n\nĐiều 10. Nguyên tắc đánh giá, công nhận kết quả và cấp chứng nhận trình độ tiếng Anh nội bộ của Trường Đại học Công nghệ GTVT  \n\nCăn cứ vào kết quả làm bài của thí sinh, đối chiếu với Phụ lục đính kèm, phòng Đào tạo lập danh sách những thí sinh đạt yêu cầu chuẩn đầu ra ngoại ngữ của Trường, Chủ tịch hội đồng trình Hiệu trưởng phê duyệt danh sách những thí sinh đạt yêu cầu. \n\nCăn cứ danh sách thí sinh thi đạt yêu cầu được phê duyệt, Trưởng phòng Đào tạo được ủy quyền cấp giấy chứng nhận cho những sinh viên đạt chuẩn đầu ra ngoại ngữ của Trường.', '2023-06-13 04:53:32', '2023-06-21 15:31:05'),
(8, '|dai hoc cong nghe giao thong van tai|utt|tuyen sinh|xet tuyen|dang ky|2023|', 'Trường Đại học Công nghệ Giao thông vận tải hướng dẫn thí sinh đăng ký xét tuyển trực tuyến tại hệ thống đăng ký xét tuyển trực tuyến tại địa chỉ: http://xettuyen.utt.edu.vn\n\nHồ sơ đăng ký cần chuẩn bị:\n\n1. Ảnh chân dung;\n\n2. Ảnh học bạ THPT (tất cả các trang học bạ THPT);\n\n3. Ảnh CCCD/CMND (cả 2 mặt);\n\n4. Ảnh các giấy tờ xác minh hưởng ưu tiên (nếu có): Chứng chỉ IELTS, giải cấp tỉnh lớp 12, đối tượng ưu tiên tuyển sinh (theo danh mục của Bộ Giáo dục và Đào tạo).\n\nThí sinh tham khảo file hướng dẫn đăng ký, hướng dẫn nộp lệ phí và phụ lục khu vực ưu tiên và đối tượng ưu tiên.\n\nLƯU Ý: \n\n- Thí sinh không cần lựa chọn phương thức xét tuyển và tổ hợp môn xét tuyển, chỉ cần khai báo đầy đủ và chính xác thông tin, hệ thống sẽ lựa chọn các điều kiện phù hợp nhất để xét tuyển.\n\n- Thông tin căn cước công dân (CCCD) VÀ địa chỉ EMAIL phải TUYỆT ĐỐI CHÍNH XÁC (thông tin này dùng để đăng nhập hệ thống, nộp lệ phí xét tuyển và nhận email từ hệ thống xét tuyển).\n\n- Trường hợp không nhận được email từ hệ thống thì thí sinh kiểm tra lại địa chỉ email đã đăng ký hoặc tìm trong mục Spam.\n\n- Thí sinh được xét tối đa 5 nguyện vọng.\n\n- Sau khi đăng ký thành công, thí sinh đăng nhập vào tài khoản đã được cấp để kiểm tra, cập nhật các thông tin đăng ký xét tuyển.\n\n- Thí sinh chịu trách nhiệm với các thông tin đã khai báo trên hệ thống đăng ký xét tuyển và không phải nộp bản cứng các loại giấy tờ về Trường.', '2023-06-18 05:52:14', '2023-06-18 05:53:46'),
(9, '|dai hoc cong nghe giao thong van tai|utt|tuyen sinh|xet tuyen|2023|he chinh quy|thong bao|', 'Hội đồng tuyển sinh Trường Đại học Công nghệ GTVT thông báo tuyển sinh đại học hệ chính quy năm 2023 như sau:\n\n1. Phương thức 1: Xét tuyển thẳng\n\n1.1. Đối tượng tuyển thẳng: Theo quy chế tuyển sinh của Bộ GD&ĐT.\n\n1.2. Điều kiện đăng ký xét tuyển: Theo quy định tại Thông tư số 08/2022/TT-BGDĐT ngày 06/06/2022 của Bộ trưởng Bộ Giáo dục và Đào tạo, cụ thể: Anh hùng lao động, Anh hùng lực lượng vũ trang nhân dân, Chiến sĩ thi đua toàn quốc; Thí sinh đoạt giải nhất, nhì, ba trong kỳ thi chọn học sinh giỏi quốc gia, quốc tế hoặc thi khoa học, kỹ thuật cấp quốc gia, quốc tế do Bộ GDĐT tổ chức, cử tham gia; Thí sinh đoạt giải nhất, nhì, ba trong các kỳ thi tay nghề khu vực ASEAN và thi tay nghề quốc tế do Bộ Lao động - Thương binh và Xã hội cử đi; thời gian đoạt giải không quá 3 năm tính tới thời điểm xét tuyển thẳng.\n\n1.3. Thời gian đăng ký xét tuyển: Từ ngày 01/6/2023 đến ngày 30/6/2023.\n\n1.4. Hình thức đăng ký xét tuyển: Nộp hồ sơ trực tiếp tại trường (mẫu hồ sơ theo quy định của Bộ GD&ĐT)\n\n1.5. Thời gian công bố kết quả xét tuyển: Trước 17h00 ngày 05/7/2023.\n\n2. Phương thức 2: Xét học bạ kết hợp\n\n2.1. Đối tượng xét tuyển: Thí sinh được công nhận tốt nghiệp THPT hoặc tương đương.\n\n2.2. Điều kiện đăng ký xét tuyển: Thí sinh có điểm tổ hợp môn xét tuyển cả năm lớp 12 >=18.0.\n\n2.3. Thời gian đăng ký xét tuyển: Từ ngày 01/6/2023 đến ngày 30/6/2023.\n\n2.4. Hình thức đăng ký xét tuyển: Đăng ký trực tuyến trên hệ thống xét tuyển của Trường Đại học Công nghệ Giao thông vận tải https://xettuyen.utt.edu.vn (thí sinh đủ điều kiện trúng tuyển phải đăng ký nguyện vọng trên Cổng thông tin tuyển sinh của Bộ GD&ĐT theo quy định).\n\n2.5. Thời gian công bố kết quả xét tuyển: Trước 17h00 ngày 05/7/2023.\n\n2.6. Chính sách ưu tiên: Thí sinh được cộng điểm ưu tiên xét tuyển nếu có một trong các điều kiện sau:\n\n+ Thí sinh đoạt giải Nhất, Nhì, Ba trong kỳ thi học sinh giỏi THPT cấp tỉnh/thành phố các môn Toán, Vật lý, Hóa học, Tin học, Tiếng Anh, Ngữ văn.\n\n+ Thí sinh có một trong các Chứng chỉ tiếng Anh quốc tế IELTS ≥ 4.5 (chứng chỉ trong thời hạn 24 tháng tính đến ngày đăng ký xét tuyển).\n\n+ Thí sinh đạt từ 01 năm học sinh giỏi cả năm trở lên bậc THPT.\n\n+ Bảng quy đổi điểm sang thang điểm 10:\n\n* Chứng chỉ Tiếng Anh:\n- IELTS 4.5-5.0: Điểm quy đổi 1.0\n- IELTS 5.5: Điểm quy đổi 1.5\n- IELTS 6.0: Điểm quy đổi 2.0\n- IELTS 6.5: Điểm quy đổi 2.5\n- IELTS 7.0 - 9.0: Điểm quy đổi 3.0\n* Đoạt giải HSG cấp tỉnh/thành phố:\n- Giải nhất: Điểm quy đổi 3.0\n- Giải nhì: Điểm quy đổi 2.0\n- Giải ba: Điểm quy đổi 1.0\n* Đạt HSG THPT:\n- Một năm: Điểm quy đổi 1.0\n- Hai năm: Điểm quy đổi 2.0\n- Ba năm: Điểm quy đổi 3.0\n\n2.8. Cách tính điểm xét tuyển (ĐXT):\n\n- Điểm xét tuyển theo thang điểm 30 làm tròn đến hai chữ số thập phân. Điểm xét tuyển được tính như sau:\n\nĐXT = M1+ M2 + M3 + Điểm ưu tiên (nếu có) + M0\n\nTrong đó:\n\n+ M1, M2, M3: Điểm tổng kết cả năm lớp 12 của các môn trong tổ hợp đăng ký xét tuyển.\n\n+ Điểm chênh lệch giữa các tổ hợp: bằng 0\n\n+ Điểm ưu tiên: Bao gồm điểm ưu tiên khu vực và điểm ưu tiên đối tượng theo Quy chế tuyển sinh của Bộ GD&ĐT.\n\n+ M0: Tổng điểm quy đổi (theo Bảng quy đổi điểm thang điểm 10 của tất cả các điều kiện ưu tiên).\n\n- Đối với các thí sinh có ĐXT bằng điểm trúng tuyển mà số lượng thí sinh đủ điều kiện trúng tuyển lớn hơn chỉ tiêu thì ưu tiên theo thứ tự nguyện vọng và điểm môn Toán.\n\n- Điểm xét tuyển của thí sinh tối đa là 30.0 điểm.\n\n2.9. Lệ phí tuyển sinh: 50.000 đồng/thí sinh.\n\n3. Phương thức 3: Xét tuyển dựa trên kết quả thi tốt nghiệp THPT năm 2023\n\n3.1. Đối tượng xét tuyển: Thí sinh tham gia kỳ thi tốt nghiệp THPT năm 2023 được công nhận tốt nghiệp THPT hoặc tương đương.\n\n3.2. Điều kiện đăng ký xét tuyển: Điểm điều kiện đăng ký xét tuyển được công bố sau khi có kết quả thi tốt nghiệp THPT 2023.\n\n3.3. Thời gian đăng ký xét tuyển: Từ ngày 10/7/2023 đến 17h30 ngày 30/7/2023.\n\n3.4. Hình thức đăng ký xét tuyển: Đăng ký trực tuyến trên Cổng thông tin tuyển sinh của Bộ GD&ĐT sau kỳ thi tốt nghiệp THPT năm 2023.\n\n3.5. Thời gian công bố kết quả xét tuyển: Trước 17h00 ngày 22/8/2023.\n\n3.7. Cách tính điểm xét tuyển (ĐXT):\n\n- Điểm xét tuyển theo thang điểm 30 làm tròn đến hai chữ số thập phân. Điểm xét tuyển được tính như sau:\n\nĐXT = M1 + M2 + M3 + Điểm ưu tiên (nếu có)\n\nTrong đó:  \n\n+ M1, M2, M3 là kết quả điểm thi tốt nghiệp THPT năm 2023 của các môn thi thuộc tổ hợp môn xét tuyển;\n\n+ Điểm ưu tiên: Bao gồm điểm ưu tiên khu vực và điểm ưu tiên đối tượng theo Quy chế tuyển sinh của Bộ GD&ĐT;\n\n+ Điểm chênh lệch giữa các tổ hợp: bằng 0.\n\n- Đối với các thí sinh có ĐXT bằng điểm trúng tuyển mà số lượng thí sinh đủ điều kiện trúng tuyển lớn hơn chỉ tiêu thì ưu tiên theo thứ tự nguyện vọng.\n\n3.8. Lệ phí đăng ký xét tuyển và xử lý nguyện vọng: Theo quy định của Bộ GD&ĐT.\n\n4. Phương thức 4: Xét tuyển dựa trên kết quả thi đánh giá tư duy do Đại học Bách khoa Hà Nội tổ chức năm 2023\n\n4.1. Đối tượng xét tuyển: Tham dự kỳ thi đánh giá tư duy do Đại học Bách Khoa Hà Nội tổ chức trong năm 2023 đợt tháng 5-6/2023 và được công nhận tốt nghiệp THPT hoặc tương đương.\n\n4.2. Điều kiện đăng ký xét tuyển: Thí sinh có tổng điểm thi đánh giá tư duy do Đại học Bách Khoa Hà Nội tổ chức năm 2023 đạt từ 50 điểm trở lên.\n\n4.3. Thời gian đăng ký xét tuyển: Từ ngày 01/6/2023 đến ngày 30/6/2023.\n\n4.4. Hình thức đăng ký tuyển sinh: Đăng ký trực tuyến trên hệ thống xét tuyển của Trường Đại học Công nghệ Giao thông vận tải http://xettuyen.utt.edu.vn (thí sinh đủ điều kiện trúng tuyển phải đăng ký nguyện vọng trên Cổng thông tin tuyển sinh của Bộ GD&ĐT theo quy định).\n\n4.5. Thời gian công bố kết quả xét tuyển: Trước 17h00 ngày 05/7/2023.\n\n4.7. Cách tính điểm xét tuyển (ĐXT):\n\n- Điểm xét tuyển theo thang điểm 30 làm tròn đến hai chữ số thập phân. Điểm xét tuyển được tính như sau:\n\nĐXT = Tổng điểm thi ×30/100 + Điểm ưu tiên (nếu có)\n\nTrong đó: Điểm ưu tiên gồm điểm ưu tiên khu vực và điểm ưu tiên đối tượng theo Quy chế tuyển sinh của Bộ GD&ĐT.\n\n- Đối với các thí sinh có ĐXT bằng điểm trúng tuyển mà số lượng thí sinh đủ điều kiện trúng tuyển lớn hơn chỉ tiêu thì ưu tiên theo tiêu chí phụ là thứ tự nguyện vọng.\n\n4.8. Lệ phí tuyển sinh: 50.000 đồng/thí sinh.', '2023-06-18 06:02:54', '2023-06-18 06:02:54'),
(10, '|dai hoc cong nghe giao thong van tai|utt|xet tuyen|he chinh quy|thong bao|diem trung tuyen|diem dau vao|2022|diem san|ket qua|', 'Điểm trúng tuyển đại học hệ chính quy năm 2022 theo phương thức xét tuyển bằng kêt quả thi THPT\n\nHội đồng tuyển sinh Trường Đại học Công nghệ Giao thông vận tải thông báo điểm trúng tuyển đại học hệ chính quy năm 2022 xét theo phương thức xét tuyển bằng kết quả thi THPT\n\nLưu ý: Đây sẽ là thông tin theo thứ tự (Mã xét tuyển - Tên chuyên ngành - Điểm trúng tuyển - Tiêu chí phụ (Theo TTNV)) \n* GTADCLG2 - Logistics và quản lý chuỗi cung ứng - 25.35 - TTNV<=2\n* GTADCTD2 - Thương mại điện tử - 25.35 - TTNV<=6\n* GTADCQM2 - Quản trị Marketing - 24.3 - TTNV<=2\n* GTADCQT2 - Quản trị doanh nghiệp - 23.65 - TTNV<=4\n* GTADCVL2 - Logistics và vận tài đa phương thức - 23.3 - TTNV<=3\n* GTADCLH2 - Logistics và hạ tầng giao thông - 19\n* GTADCTN2 - Tài chính doanh nghiệp - 23.55 - TTNV<=8\n* GTADCKT2 - Kế toán doanh nghiệp - 23.5 - TTNV<=3\n* GTADCTT2 - Công nghệ thông tin - 25.3 - TTNV<=7\n* GTADCHT2 - Hệ thống thông tin - 24.4 - TTNV<=6\n* GTADCTG2 - Trí tuệ nhân tạo và giao thông thông minh - 19\n* GTADCTM2 - Mạng máy tính và truyền thông dữ liệu - 24.05 - TTNV<=3\n* GTADCDT2 - Công nghệ kỹ thuật Điện tử - viễn thông - 23.8 - TTNV<=4\n* GTADCCN2 - Công nghệ kỹ thuật cơ điện tử - 23.5 - TTNV<=2\n* GTADCOT2 - Công nghệ kỹ thuật Ô tô - 23.75 - TTNV=1\n* GTADCCM2 - Công nghệ chế tạo máy - 22.05 - TTNV=1\n* GTADCDM2 - CNKT Đầu máy -  toa xe và tàu điện Metro - 21.65 - TTNV=1\n* GTADCCO2 - Công nghệ kỹ thuật cơ điện tử trên ô tô - 21.25 - TTNV<=3\n* GTADCMX2 - Công nghệ kỹ thuật Máy xây dựng - 16.95 - TTNV=1\n* GTADCMT2 - Công nghệ kỹ thuật Tàu thủy và thiết bị nổi - 16.3 - TTNV<=3\n* GTADCKX2 - Kinh tế xây dựng - 22.75 - TTNV<=6\n* GTADCQX2 - Quản lý xây dựng - 16.75 - TTNV<=5\n* GTADCCD2 - Công nghệ kỹ thuật XD Cầu đường bộ - 16\n* GTADCCH2 - Hạ tầng giao thông đô thị thông minh - 16\n* GTADCDD2 - Công nghệ kỹ thuật XDCT DD&CN - 16\n* GTADCMN2 - Công nghệ và quản lý môi trường - 16\n* GTADCLG1 - Logistics và quản lý chuỗi cung ứng (học tại Vĩnh Phúc) - 22.5 - TTNV<=7\n* GTADCDT1 - CNKT Điện tử - viễn thông (học tại Vĩnh Phúc) - 20.95 - TTNV=1\n* GTADCKT1 - Kế toán doanh nghiệp (học tại Vĩnh Phúc) - 20\n* GTADCOT1 - Công nghệ kỹ thuật Ô tô (học tại Vĩnh Phúc) - 20\n* GTADCTT1 - Công nghệ thông tin (học tại Vĩnh Phúc) - 20\n* GTADCCM1 - Công nghệ chế tạo máy (học tại Vĩnh Phúc) - 17.8 - TTNV<=4\n* GTADCKX1 - Kinh tế xây dựng (học tại Vĩnh Phúc) - 17.65 - TTNV<=4\n* GTADCDD1 - Công nghệ kỹ thuật XDCT DD&CN (học tại Vĩnh Phúc) - 16\n* GTADCCD1 - Công nghệ kỹ thuật XD Cầu đường bộ (học tại Vĩnh Phúc) - 16\n* GTADCOT3 - Công nghệ kỹ thuật Ô tô (học tại Thái Nguyên) - 17.55 - TTNV=1\n* GTADCCD3 - CNKT XD Cầu đường bộ (học tại Thái Nguyên) - 16\n\nQuy định về điểm trúng tuyển (ĐTT):\n\n* ĐTT = Điểm môn 1 + Điểm môn 2 + Điểm môn 3 + Điểm ưu tiên khu vực (nếu có) + Điểm ưu tiên đối tượng (nếu có)\n\n* Điểm trúng tuyển áp dụng cho tất các tổ hợp môn xét tuyển.\n\n* Tiêu chí phụ: trong trường hợp số thí sinh đạt điểm trúng tuyển vượt quá chỉ tiêu ngành, các thí sinh có kết quả bằng điểm xét tuyển ở cuối danh sách sẽ được xét trúng tuyển theo điều kiện ưu tiên thí sinh có thứ tự nguyện vọng ưu tiên cao hơn.\n\n          Thí sinh tra cứu kết quả trúng tuyển tại địa chỉ http://diemthi.utt.edu.vn hoặc http://kqmb.hust.edu.vn/\n\n          Những thí sinh đăng ký xét tuyển theo phương thức khác (xét tuyển sớm) chỉ cần tra cứu kết quả trúng tuyển tại địa chỉ http://kqmb.hust.edu.vn/\n\n          Thời gian xác nhận nhập học, thủ tục nhập học, lịch học…thí sinh theo dõi tại các thông báo tiếp theo.\n\nChi tiết xin liên hệ: Văn phòng Tuyển sinh – Trường Đại học Công nghệ GTVT, số 54 Triều Khúc, Thanh Xuân, Hà Nội, số điện thoại: 0243.552.6713; 0243.552.6714.', '2023-06-18 16:40:31', '2023-06-20 16:07:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(10) UNSIGNED NOT NULL,
  `image_customer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_customer` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday_customer` datetime NOT NULL,
  `gentle_customer` tinyint(4) NOT NULL,
  `email_customer` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_customer` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_customer` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id_customer`, `image_customer`, `name_customer`, `birthday_customer`, `gentle_customer`, `email_customer`, `password_customer`, `phone_customer`, `created_at`, `updated_at`) VALUES
(1, 'http://127.0.0.1:8000/storage/baoson-1687057655.jpg', 'Bảo Sơn', '2023-05-26 16:40:51', 0, 'toilaone12@gmail.com', '69b21e9c5b38d7c34449a5b290363487', NULL, '2023-05-26 09:40:51', '2023-07-09 16:53:02'),
(4, 'http://127.0.0.1:8000/storage/sonkieudangbao-1685094394.jpg', 'Sơn Kiều Đặng Bảo', '2023-05-26 16:46:34', 0, 'kieudangbaoson@gmail.com', NULL, NULL, '2023-05-26 09:46:34', '2023-05-26 09:46:34'),
(5, 'http://127.0.0.1:8000/storage/sonkieudangbao-1688809838.jpg', 'Sơn Kiều Đặng Bảo', '2023-07-08 16:50:38', 0, 'baooson3005@gmail.com', NULL, NULL, '2023-07-08 09:50:38', '2023-07-08 09:50:38'),
(8, 'http://127.0.0.1:8000/fe/image/person.svg', 'UID143223EFBC24C7D2583BE69251', '2023-07-08 17:57:58', 0, 'bokazem69@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '2023-07-08 10:57:58', '2023-07-09 11:08:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history_message`
--

CREATE TABLE `history_message` (
  `id_history` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `code_history` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `history_message`
--

INSERT INTO `history_message` (`id_history`, `id_user`, `code_history`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 1, '30301cc0c33c079', '', '', '2023-04-12 01:34:04', '2023-04-12 01:34:04'),
(2, 1, 'cc156de965ce533', 'UTT', 'Trường Đại học Công nghệ Giao thông Vận tải (tên tiếng Anh: University Of Transport Technology, tên viết tắt: UTT) là trường Đại học công lập được nâng cấp năm 2011 từ Trường Cao đẳng giao thông vận tải- trực thuộc Bộ Giao thông Vận tải[1]. Tiền thân là trường Cao đẳng Công chính, được thành lập ngày 15/11/1945. Trường đào tạo đa ngành, đa lĩnh vực về công nghệ kỹ thuật giao thông, công nghệ kỹ thuật cơ khí, ô tô, kinh tế, vận tải, logistics, công nghệ thông tin, điện tử viễn thông, môi trường... theo định hướng ứng dụng phục vụ ngành GTVT và các ngành kinh tế quốc dân. Năm 2016, Trường được Thủ tướng Chính phủ quy hoạch phát triển thành trường đại học trọng điểm Quốc gia; năm 2017 trường là 1 trong 15 trường đại học đầu tiên của Việt Nam được công nhận đạt tiêu chuẩn chất lượng giáo dục đại học.', '2023-04-24 02:29:07', '2023-04-24 02:29:07'),
(3, 1, 'cc156de965ce533', 'UTT', 'Trường Đại học Công nghệ Giao thông Vận tải (tên tiếng Anh: University Of Transport Technology, tên viết tắt: UTT) là trường Đại học công lập được nâng cấp năm 2011 từ Trường Cao đẳng giao thông vận tải- trực thuộc Bộ Giao thông Vận tải[1]. Tiền thân là trường Cao đẳng Công chính, được thành lập ngày 15/11/1945. Trường đào tạo đa ngành, đa lĩnh vực về công nghệ kỹ thuật giao thông, công nghệ kỹ thuật cơ khí, ô tô, kinh tế, vận tải, logistics, công nghệ thông tin, điện tử viễn thông, môi trường... theo định hướng ứng dụng phục vụ ngành GTVT và các ngành kinh tế quốc dân. Năm 2016, Trường được Thủ tướng Chính phủ quy hoạch phát triển thành trường đại học trọng điểm Quốc gia; năm 2017 trường là 1 trong 15 trường đại học đầu tiên của Việt Nam được công nhận đạt tiêu chuẩn chất lượng giáo dục đại học.', '2023-04-24 02:29:20', '2023-04-24 02:29:20'),
(4, 1, '74d07c42f945f62', 'UTT', 'Trường Đại học Công nghệ Giao thông Vận tải (tên tiếng Anh: University Of Transport Technology, tên viết tắt: UTT) là trường Đại học công lập được nâng cấp năm 2011 từ Trường Cao đẳng giao thông vận tải- trực thuộc Bộ Giao thông Vận tải[1]. Tiền thân là trường Cao đẳng Công chính, được thành lập ngày 15/11/1945. Trường đào tạo đa ngành, đa lĩnh vực về công nghệ kỹ thuật giao thông, công nghệ kỹ thuật cơ khí, ô tô, kinh tế, vận tải, logistics, công nghệ thông tin, điện tử viễn thông, môi trường... theo định hướng ứng dụng phục vụ ngành GTVT và các ngành kinh tế quốc dân. Năm 2016, Trường được Thủ tướng Chính phủ quy hoạch phát triển thành trường đại học trọng điểm Quốc gia; năm 2017 trường là 1 trong 15 trường đại học đầu tiên của Việt Nam được công nhận đạt tiêu chuẩn chất lượng giáo dục đại học.', '2023-04-24 02:42:54', '2023-04-24 02:42:54'),
(5, 1, 'fd2b3ed63600514', 'UTT', 'Trường Đại học Công nghệ Giao thông Vận tải (tên tiếng Anh: University Of Transport Technology, tên viết tắt: UTT) là trường Đại học công lập được nâng cấp năm 2011 từ Trường Cao đẳng giao thông vận tải- trực thuộc Bộ Giao thông Vận tải[1]. Tiền thân là trường Cao đẳng Công chính, được thành lập ngày 15/11/1945. Trường đào tạo đa ngành, đa lĩnh vực về công nghệ kỹ thuật giao thông, công nghệ kỹ thuật cơ khí, ô tô, kinh tế, vận tải, logistics, công nghệ thông tin, điện tử viễn thông, môi trường... theo định hướng ứng dụng phục vụ ngành GTVT và các ngành kinh tế quốc dân. Năm 2016, Trường được Thủ tướng Chính phủ quy hoạch phát triển thành trường đại học trọng điểm Quốc gia; năm 2017 trường là 1 trong 15 trường đại học đầu tiên của Việt Nam được công nhận đạt tiêu chuẩn chất lượng giáo dục đại học.', '2023-04-24 02:46:32', '2023-04-24 02:46:32'),
(6, 1, 'c0b60a18b8e3e8b', 'UTT', 'Trường Đại học Công nghệ Giao thông Vận tải (tên tiếng Anh: University Of Transport Technology, tên viết tắt: UTT) là trường Đại học công lập được nâng cấp năm 2011 từ Trường Cao đẳng giao thông vận tải- trực thuộc Bộ Giao thông Vận tải[1]. Tiền thân là trường Cao đẳng Công chính, được thành lập ngày 15/11/1945. Trường đào tạo đa ngành, đa lĩnh vực về công nghệ kỹ thuật giao thông, công nghệ kỹ thuật cơ khí, ô tô, kinh tế, vận tải, logistics, công nghệ thông tin, điện tử viễn thông, môi trường... theo định hướng ứng dụng phục vụ ngành GTVT và các ngành kinh tế quốc dân. Năm 2016, Trường được Thủ tướng Chính phủ quy hoạch phát triển thành trường đại học trọng điểm Quốc gia; năm 2017 trường là 1 trong 15 trường đại học đầu tiên của Việt Nam được công nhận đạt tiêu chuẩn chất lượng giáo dục đại học.', '2023-04-24 02:47:37', '2023-04-24 02:47:37'),
(7, 1, '25bed494390d7dd', 'UTT', 'Trường Đại học Công nghệ Giao thông Vận tải (tên tiếng Anh: University Of Transport Technology, tên viết tắt: UTT) là trường Đại học công lập được nâng cấp năm 2011 từ Trường Cao đẳng giao thông vận tải- trực thuộc Bộ Giao thông Vận tải[1]. Tiền thân là trường Cao đẳng Công chính, được thành lập ngày 15/11/1945. Trường đào tạo đa ngành, đa lĩnh vực về công nghệ kỹ thuật giao thông, công nghệ kỹ thuật cơ khí, ô tô, kinh tế, vận tải, logistics, công nghệ thông tin, điện tử viễn thông, môi trường... theo định hướng ứng dụng phục vụ ngành GTVT và các ngành kinh tế quốc dân. Năm 2016, Trường được Thủ tướng Chính phủ quy hoạch phát triển thành trường đại học trọng điểm Quốc gia; năm 2017 trường là 1 trong 15 trường đại học đầu tiên của Việt Nam được công nhận đạt tiêu chuẩn chất lượng giáo dục đại học.', '2023-05-23 04:14:21', '2023-05-23 04:14:21'),
(8, 1, '25bed494390d7dd', 'UTT', 'Trường Đại học Công nghệ Giao thông Vận tải (tên tiếng Anh: University Of Transport Technology, tên viết tắt: UTT) là trường Đại học công lập được nâng cấp năm 2011 từ Trường Cao đẳng giao thông vận tải- trực thuộc Bộ Giao thông Vận tải[1]. Tiền thân là trường Cao đẳng Công chính, được thành lập ngày 15/11/1945. Trường đào tạo đa ngành, đa lĩnh vực về công nghệ kỹ thuật giao thông, công nghệ kỹ thuật cơ khí, ô tô, kinh tế, vận tải, logistics, công nghệ thông tin, điện tử viễn thông, môi trường... theo định hướng ứng dụng phục vụ ngành GTVT và các ngành kinh tế quốc dân. Năm 2016, Trường được Thủ tướng Chính phủ quy hoạch phát triển thành trường đại học trọng điểm Quốc gia; năm 2017 trường là 1 trong 15 trường đại học đầu tiên của Việt Nam được công nhận đạt tiêu chuẩn chất lượng giáo dục đại học.', '2023-05-23 04:22:08', '2023-05-23 04:22:08'),
(9, 1, '3eb2aa58ccf7781', 'U', 'Trường Đại học Công nghệ Giao thông Vận tải (tên tiếng Anh: University Of Transport Technology, tên viết tắt: UTT) là trường Đại học công lập được nâng cấp năm 2011 từ Trường Cao đẳng giao thông vận tải- trực thuộc Bộ Giao thông Vận tải[1]. Tiền thân là trường Cao đẳng Công chính, được thành lập ngày 15/11/1945. Trường đào tạo đa ngành, đa lĩnh vực về công nghệ kỹ thuật giao thông, công nghệ kỹ thuật cơ khí, ô tô, kinh tế, vận tải, logistics, công nghệ thông tin, điện tử viễn thông, môi trường... theo định hướng ứng dụng phục vụ ngành GTVT và các ngành kinh tế quốc dân. Năm 2016, Trường được Thủ tướng Chính phủ quy hoạch phát triển thành trường đại học trọng điểm Quốc gia; năm 2017 trường là 1 trong 15 trường đại học đầu tiên của Việt Nam được công nhận đạt tiêu chuẩn chất lượng giáo dục đại học.', '2023-05-23 04:23:30', '2023-05-23 04:23:30'),
(10, 1, 'd9a915ea274497d', 'UTT', 'Trường Đại học Công nghệ Giao thông Vận tải (tên tiếng Anh: University Of Transport Technology, tên viết tắt: UTT) là trường Đại học công lập được nâng cấp năm 2011 từ Trường Cao đẳng giao thông vận tải- trực thuộc Bộ Giao thông Vận tải[1]. Tiền thân là trường Cao đẳng Công chính, được thành lập ngày 15/11/1945. Trường đào tạo đa ngành, đa lĩnh vực về công nghệ kỹ thuật giao thông, công nghệ kỹ thuật cơ khí, ô tô, kinh tế, vận tải, logistics, công nghệ thông tin, điện tử viễn thông, môi trường... theo định hướng ứng dụng phục vụ ngành GTVT và các ngành kinh tế quốc dân. Năm 2016, Trường được Thủ tướng Chính phủ quy hoạch phát triển thành trường đại học trọng điểm Quốc gia; năm 2017 trường là 1 trong 15 trường đại học đầu tiên của Việt Nam được công nhận đạt tiêu chuẩn chất lượng giáo dục đại học.', '2023-05-23 04:26:02', '2023-05-23 04:26:02'),
(11, 1, 'f83cb8088f9a583', 'UT', 'Trường Đại học Công nghệ Giao thông Vận tải (tên tiếng Anh: University Of Transport Technology, tên viết tắt: UTT) là trường Đại học công lập được nâng cấp năm 2011 từ Trường Cao đẳng giao thông vận tải- trực thuộc Bộ Giao thông Vận tải[1]. Tiền thân là trường Cao đẳng Công chính, được thành lập ngày 15/11/1945. Trường đào tạo đa ngành, đa lĩnh vực về công nghệ kỹ thuật giao thông, công nghệ kỹ thuật cơ khí, ô tô, kinh tế, vận tải, logistics, công nghệ thông tin, điện tử viễn thông, môi trường... theo định hướng ứng dụng phục vụ ngành GTVT và các ngành kinh tế quốc dân. Năm 2016, Trường được Thủ tướng Chính phủ quy hoạch phát triển thành trường đại học trọng điểm Quốc gia; năm 2017 trường là 1 trong 15 trường đại học đầu tiên của Việt Nam được công nhận đạt tiêu chuẩn chất lượng giáo dục đại học.', '2023-05-23 04:28:24', '2023-05-23 04:28:24'),
(12, 1, '3eb2aa58ccf7781', 'UTT', 'Trường Đại học Công nghệ Giao thông Vận tải (tên tiếng Anh: University Of Transport Technology, tên viết tắt: UTT) là trường Đại học công lập được nâng cấp năm 2011 từ Trường Cao đẳng giao thông vận tải- trực thuộc Bộ Giao thông Vận tải[1]. Tiền thân là trường Cao đẳng Công chính, được thành lập ngày 15/11/1945. Trường đào tạo đa ngành, đa lĩnh vực về công nghệ kỹ thuật giao thông, công nghệ kỹ thuật cơ khí, ô tô, kinh tế, vận tải, logistics, công nghệ thông tin, điện tử viễn thông, môi trường... theo định hướng ứng dụng phục vụ ngành GTVT và các ngành kinh tế quốc dân. Năm 2016, Trường được Thủ tướng Chính phủ quy hoạch phát triển thành trường đại học trọng điểm Quốc gia; năm 2017 trường là 1 trong 15 trường đại học đầu tiên của Việt Nam được công nhận đạt tiêu chuẩn chất lượng giáo dục đại học.', '2023-05-26 00:33:25', '2023-05-26 00:33:25'),
(13, 1, '3eb2aa58ccf7781', 'UTT', 'Trường Đại học Công nghệ Giao thông Vận tải (tên tiếng Anh: University Of Transport Technology, tên viết tắt: UTT) là trường Đại học công lập được nâng cấp năm 2011 từ Trường Cao đẳng giao thông vận tải- trực thuộc Bộ Giao thông Vận tải[1]. Tiền thân là trường Cao đẳng Công chính, được thành lập ngày 15/11/1945. Trường đào tạo đa ngành, đa lĩnh vực về công nghệ kỹ thuật giao thông, công nghệ kỹ thuật cơ khí, ô tô, kinh tế, vận tải, logistics, công nghệ thông tin, điện tử viễn thông, môi trường... theo định hướng ứng dụng phục vụ ngành GTVT và các ngành kinh tế quốc dân. Năm 2016, Trường được Thủ tướng Chính phủ quy hoạch phát triển thành trường đại học trọng điểm Quốc gia; năm 2017 trường là 1 trong 15 trường đại học đầu tiên của Việt Nam được công nhận đạt tiêu chuẩn chất lượng giáo dục đại học.', '2023-05-26 00:33:42', '2023-05-26 00:33:42'),
(14, 1, '8d4dd827d46bfa5', 'UTT', 'Trường Đại học Công nghệ Giao thông Vận tải (tên tiếng Anh: University Of Transport Technology, tên viết tắt: UTT) là trường Đại học công lập được nâng cấp năm 2011 từ Trường Cao đẳng giao thông vận tải- trực thuộc Bộ Giao thông Vận tải[1]. Tiền thân là trường Cao đẳng Công chính, được thành lập ngày 15/11/1945. Trường đào tạo đa ngành, đa lĩnh vực về công nghệ kỹ thuật giao thông, công nghệ kỹ thuật cơ khí, ô tô, kinh tế, vận tải, logistics, công nghệ thông tin, điện tử viễn thông, môi trường... theo định hướng ứng dụng phục vụ ngành GTVT và các ngành kinh tế quốc dân. Năm 2016, Trường được Thủ tướng Chính phủ quy hoạch phát triển thành trường đại học trọng điểm Quốc gia; năm 2017 trường là 1 trong 15 trường đại học đầu tiên của Việt Nam được công nhận đạt tiêu chuẩn chất lượng giáo dục đại học.', '2023-05-26 00:36:35', '2023-05-26 00:36:35'),
(15, 1, '9cf18671f6c7e5f', 'UTT', 'Trường Đại học Công nghệ Giao thông Vận tải (tên tiếng Anh: University Of Transport Technology, tên viết tắt: UTT) là trường Đại học công lập được nâng cấp năm 2011 từ Trường Cao đẳng giao thông vận tải- trực thuộc Bộ Giao thông Vận tải[1]. Tiền thân là trường Cao đẳng Công chính, được thành lập ngày 15/11/1945. Trường đào tạo đa ngành, đa lĩnh vực về công nghệ kỹ thuật giao thông, công nghệ kỹ thuật cơ khí, ô tô, kinh tế, vận tải, logistics, công nghệ thông tin, điện tử viễn thông, môi trường... theo định hướng ứng dụng phục vụ ngành GTVT và các ngành kinh tế quốc dân. Năm 2016, Trường được Thủ tướng Chính phủ quy hoạch phát triển thành trường đại học trọng điểm Quốc gia; năm 2017 trường là 1 trong 15 trường đại học đầu tiên của Việt Nam được công nhận đạt tiêu chuẩn chất lượng giáo dục đại học.', '2023-05-26 00:37:33', '2023-05-26 00:37:33'),
(16, 1, '9cf18671f6c7e5f', 'UT', 'Trường Đại học Công nghệ Giao thông Vận tải (tên tiếng Anh: University Of Transport Technology, tên viết tắt: UTT) là trường Đại học công lập được nâng cấp năm 2011 từ Trường Cao đẳng giao thông vận tải- trực thuộc Bộ Giao thông Vận tải[1]. Tiền thân là trường Cao đẳng Công chính, được thành lập ngày 15/11/1945. Trường đào tạo đa ngành, đa lĩnh vực về công nghệ kỹ thuật giao thông, công nghệ kỹ thuật cơ khí, ô tô, kinh tế, vận tải, logistics, công nghệ thông tin, điện tử viễn thông, môi trường... theo định hướng ứng dụng phục vụ ngành GTVT và các ngành kinh tế quốc dân. Năm 2016, Trường được Thủ tướng Chính phủ quy hoạch phát triển thành trường đại học trọng điểm Quốc gia; năm 2017 trường là 1 trong 15 trường đại học đầu tiên của Việt Nam được công nhận đạt tiêu chuẩn chất lượng giáo dục đại học.', '2023-05-26 00:37:45', '2023-05-26 00:37:45'),
(17, 1, '9cf18671f6c7e5f', 'UT', 'Trường Đại học Công nghệ Giao thông Vận tải (tên tiếng Anh: University Of Transport Technology, tên viết tắt: UTT) là trường Đại học công lập được nâng cấp năm 2011 từ Trường Cao đẳng giao thông vận tải- trực thuộc Bộ Giao thông Vận tải[1]. Tiền thân là trường Cao đẳng Công chính, được thành lập ngày 15/11/1945. Trường đào tạo đa ngành, đa lĩnh vực về công nghệ kỹ thuật giao thông, công nghệ kỹ thuật cơ khí, ô tô, kinh tế, vận tải, logistics, công nghệ thông tin, điện tử viễn thông, môi trường... theo định hướng ứng dụng phục vụ ngành GTVT và các ngành kinh tế quốc dân. Năm 2016, Trường được Thủ tướng Chính phủ quy hoạch phát triển thành trường đại học trọng điểm Quốc gia; năm 2017 trường là 1 trong 15 trường đại học đầu tiên của Việt Nam được công nhận đạt tiêu chuẩn chất lượng giáo dục đại học.', '2023-05-26 00:38:37', '2023-05-26 00:38:37'),
(18, 4, 'f176fcae71f00fe', 'UTT', 'Trường Đại học Công nghệ Giao thông Vận tải (tên tiếng Anh: University Of Transport Technology, tên viết tắt: UTT) là trường Đại học công lập được nâng cấp năm 2011 từ Trường Cao đẳng giao thông vận tải- trực thuộc Bộ Giao thông Vận tải[1]. Tiền thân là trường Cao đẳng Công chính, được thành lập ngày 15/11/1945. Trường đào tạo đa ngành, đa lĩnh vực về công nghệ kỹ thuật giao thông, công nghệ kỹ thuật cơ khí, ô tô, kinh tế, vận tải, logistics, công nghệ thông tin, điện tử viễn thông, môi trường... theo định hướng ứng dụng phục vụ ngành GTVT và các ngành kinh tế quốc dân. Năm 2016, Trường được Thủ tướng Chính phủ quy hoạch phát triển thành trường đại học trọng điểm Quốc gia; năm 2017 trường là 1 trong 15 trường đại học đầu tiên của Việt Nam được công nhận đạt tiêu chuẩn chất lượng giáo dục đại học.', '2023-05-26 09:46:46', '2023-05-26 09:46:46'),
(19, 4, 'f176fcae71f00fe', 'UTT', 'Trường Đại học Công nghệ Giao thông Vận tải (tên tiếng Anh: University Of Transport Technology, tên viết tắt: UTT) là trường Đại học công lập được nâng cấp năm 2011 từ Trường Cao đẳng giao thông vận tải- trực thuộc Bộ Giao thông Vận tải[1]. Tiền thân là trường Cao đẳng Công chính, được thành lập ngày 15/11/1945. Trường đào tạo đa ngành, đa lĩnh vực về công nghệ kỹ thuật giao thông, công nghệ kỹ thuật cơ khí, ô tô, kinh tế, vận tải, logistics, công nghệ thông tin, điện tử viễn thông, môi trường... theo định hướng ứng dụng phục vụ ngành GTVT và các ngành kinh tế quốc dân. Năm 2016, Trường được Thủ tướng Chính phủ quy hoạch phát triển thành trường đại học trọng điểm Quốc gia; năm 2017 trường là 1 trong 15 trường đại học đầu tiên của Việt Nam được công nhận đạt tiêu chuẩn chất lượng giáo dục đại học.', '2023-05-26 09:47:49', '2023-05-26 09:47:49'),
(20, 4, 'f176fcae71f00fe', 'UTT', 'Trường Đại học Công nghệ Giao thông Vận tải (tên tiếng Anh: University Of Transport Technology, tên viết tắt: UTT) là trường Đại học công lập được nâng cấp năm 2011 từ Trường Cao đẳng giao thông vận tải- trực thuộc Bộ Giao thông Vận tải[1]. Tiền thân là trường Cao đẳng Công chính, được thành lập ngày 15/11/1945. Trường đào tạo đa ngành, đa lĩnh vực về công nghệ kỹ thuật giao thông, công nghệ kỹ thuật cơ khí, ô tô, kinh tế, vận tải, logistics, công nghệ thông tin, điện tử viễn thông, môi trường... theo định hướng ứng dụng phục vụ ngành GTVT và các ngành kinh tế quốc dân. Năm 2016, Trường được Thủ tướng Chính phủ quy hoạch phát triển thành trường đại học trọng điểm Quốc gia; năm 2017 trường là 1 trong 15 trường đại học đầu tiên của Việt Nam được công nhận đạt tiêu chuẩn chất lượng giáo dục đại học.', '2023-05-26 09:48:00', '2023-05-26 09:48:00'),
(21, 4, 'f176fcae71f00fe', 'UTT', 'Trường Đại học Công nghệ Giao thông Vận tải (tên tiếng Anh: University Of Transport Technology, tên viết tắt: UTT) là trường Đại học công lập được nâng cấp năm 2011 từ Trường Cao đẳng giao thông vận tải- trực thuộc Bộ Giao thông Vận tải[1]. Tiền thân là trường Cao đẳng Công chính, được thành lập ngày 15/11/1945. Trường đào tạo đa ngành, đa lĩnh vực về công nghệ kỹ thuật giao thông, công nghệ kỹ thuật cơ khí, ô tô, kinh tế, vận tải, logistics, công nghệ thông tin, điện tử viễn thông, môi trường... theo định hướng ứng dụng phục vụ ngành GTVT và các ngành kinh tế quốc dân. Năm 2016, Trường được Thủ tướng Chính phủ quy hoạch phát triển thành trường đại học trọng điểm Quốc gia; năm 2017 trường là 1 trong 15 trường đại học đầu tiên của Việt Nam được công nhận đạt tiêu chuẩn chất lượng giáo dục đại học.', '2023-05-26 09:48:18', '2023-05-26 09:48:18'),
(22, 4, 'f176fcae71f00fe', 'UTT', 'Trường Đại học Công nghệ Giao thông Vận tải (tên tiếng Anh: University Of Transport Technology, tên viết tắt: UTT) là trường Đại học công lập được nâng cấp năm 2011 từ Trường Cao đẳng giao thông vận tải- trực thuộc Bộ Giao thông Vận tải[1]. Tiền thân là trường Cao đẳng Công chính, được thành lập ngày 15/11/1945. Trường đào tạo đa ngành, đa lĩnh vực về công nghệ kỹ thuật giao thông, công nghệ kỹ thuật cơ khí, ô tô, kinh tế, vận tải, logistics, công nghệ thông tin, điện tử viễn thông, môi trường... theo định hướng ứng dụng phục vụ ngành GTVT và các ngành kinh tế quốc dân. Năm 2016, Trường được Thủ tướng Chính phủ quy hoạch phát triển thành trường đại học trọng điểm Quốc gia; năm 2017 trường là 1 trong 15 trường đại học đầu tiên của Việt Nam được công nhận đạt tiêu chuẩn chất lượng giáo dục đại học.', '2023-05-26 09:49:02', '2023-05-26 09:49:02'),
(23, 1, '25bed494390d7dd', '<i class=\"fa-solid fa-thumbs-up fs-12\"></i>', 'Cảm ơn bạn vì đã thích câu nói vừa rồi!', '2023-06-18 06:03:18', '2023-06-18 06:03:18'),
(24, 1, '25bed494390d7dd', 'Cho tôi thông tin tuyển sinh 2023', 'Trường Đại học Công nghệ Giao thông vận tải hướng dẫn thí sinh đăng ký xét tuyển trực tuyến tại hệ thống đăng ký xét tuyển trực tuyến tại địa chỉ: http://xettuyen.utt.edu.vn\n\nHồ sơ đăng ký cần chuẩn bị:\n\n1. Ảnh chân dung;\n\n2. Ảnh học bạ THPT (tất cả các trang học bạ THPT);\n\n3. Ảnh CCCD/CMND (cả 2 mặt);\n\n4. Ảnh các giấy tờ xác minh hưởng ưu tiên (nếu có): Chứng chỉ IELTS, giải cấp tỉnh lớp 12, đối tượng ưu tiên tuyển sinh (theo danh mục của Bộ Giáo dục và Đào tạo).\n\nThí sinh tham khảo file hướng dẫn đăng ký, hướng dẫn nộp lệ phí và phụ lục khu vực ưu tiên và đối tượng ưu tiên.\n\nLƯU Ý: \n\n- Thí sinh không cần lựa chọn phương thức xét tuyển và tổ hợp môn xét tuyển, chỉ cần khai báo đầy đủ và chính xác thông tin, hệ thống sẽ lựa chọn các điều kiện phù hợp nhất để xét tuyển.\n\n- Thông tin căn cước công dân (CCCD) VÀ địa chỉ EMAIL phải TUYỆT ĐỐI CHÍNH XÁC (thông tin này dùng để đăng nhập hệ thống, nộp lệ phí xét tuyển và nhận email từ hệ thống xét tuyển).\n\n- Trường hợp không nhận được email từ hệ thống thì thí sinh kiểm tra lại địa chỉ email đã đăng ký hoặc tìm trong mục Spam.\n\n- Thí sinh được xét tối đa 5 nguyện vọng.\n\n- Sau khi đăng ký thành công, thí sinh đăng nhập vào tài khoản đã được cấp để kiểm tra, cập nhật các thông tin đăng ký xét tuyển.\n\n- Thí sinh chịu trách nhiệm với các thông tin đã khai báo trên hệ thống đăng ký xét tuyển và không phải nộp bản cứng các loại giấy tờ về Trường.', '2023-06-18 16:20:21', '2023-06-18 16:20:21'),
(25, 1, '25bed494390d7dd', 'Cho tôi thông tin về miễn thi tiếng anh', 'Điều 1. Phạm vi và Đối tượng áp dụng\n1. Văn bản này quy định về điều kiện, quy trình, thủ tục miễn học phần Tiếng Anh cơ bản và quy đổi điểm đối với sinh viên dại học hệ chính quy của trường Đại học Công nghệ giao thông vận tải.\n2. Quy định được áp dụng đối với sinh viên K72 (tuyển sinh từ năm 2022) trở về sau.\n3. Quy định này không áp dụng với sinh viên đào tạo văn bằng 2.\nĐiều 2. Điều kiện xét miễn học, miễn thi và quy đổi điểm tương ứng\nSinh viên có một trong các chứng chỉ dưới đây sẽ được miễn học phần Tiếng Anh cơ bản với mức quy đổi điểm tương ứng sau:\n* IELTS (4.5 - 5.0), TOEIC (450 - 595), TOEFL ITP (450 - 499), TOEFL (30 - 45), CAMBRIDGE TESTS (140 - 159), APTIS (B1), PTE (Level 3) sẽ tương ứng điểm tổng kết học phần sẽ quy đổi thành 8 (theo thang điểm 10).\n* IELTS (5.5 - 6.5), TOEIC (600 - 845), TOEFL ITP (500 - 626), TOEFL (46 - 93), CAMBRIDGE TESTS (160 - 179), APTIS (B2), PTE (Level 4) sẽ tương ứng điểm tổng kết học phần sẽ quy đổi thành 9 (theo thang điểm 10).\n* IELTS (7.0 - 9.0), TOEIC (850  - 990), TOEFL ITP (627 - 677), TOEFL (94 - 120), CAMBRIDGE TESTS (180 - 230), APTIS (C1 - C2), PTE (Level 5-6) sẽ tương ứng điểm tổng kết học phần sẽ quy đổi thành 10 (theo thang điểm 10) .\n* Lưu ý:\n(1). Là các chứng chỉ do các đơn vị đủ điều kiện tổ chức thi và cấp chứng chỉ theo quy định hiện hành của Bộ Giáo dục và Đào tạo.\n(2). Là các chứng chỉ được liệt kê trong bảng quy đổi.\nĐiều 3. Thủ tục xin miễn học phần\nSinh viên thỏa mãn các điều kiện theo Điều 2, nếu có nhu cầu cần phải nộp về phòng Đào tạo 21 ngày trước khi bắt đầu học kỳ có đăng ký học phần này. Hồ sơ bao gồm: \n- Đơn theo mẫu (phụ lục 1)\n- Bản sao công chứng chứng chỉ ngoại ngữ, (Lưu ý: Khi nộp, sinh viên cần tình bản gốc điểm kiểm tra, đối chiếu và phải có hiệu lực trong thời điểm xét miễn học).\nĐiều 4. Quy trình\n1. Tập hợp đơn, lập d/s sinh viên miễn học: Trong thời hạn 21 ngày trước khi bắt đầu học kỳ (đơn vị phụ trách: phòng Đào tạo).\n2. Thẩm định hồ sơ, chứng chỉ: Trong thời hạn 15 ngày trước khi bắt đầu học kỳ (đơn vị phụ trách: phòng Đào tạo).\n3. Tổng hợp kết quả, trình Hội đồng với sinh viên hợp lệ: Trong thời hạn 15 ngày trước khi bắt đầu học kỳ (đơn vị phụ trách: phòng Đào tạo).\n4. Tổ chức xét miễn học phần và trình Hiệu trưởng công nhận miễn học phần: Trong thời hạn 10 ngày trước khi bắt đầu học kỳ (đơn vị phụ trách: Hội đồng Xét miễn HP TACB và quy đổi điểm).\n5. Ra quyết định miễn học phần: Trong thời hạn 7 ngày trước khi bắt đầu học kỳ (đơn vị phụ trách: Hiệu trưởng).\nĐiều 5. Tổ chức thực hiện\n- Phòng Đào tạo chủ trì, phối hợp với các đơn vị liên quan hướng dẫn và triển khai thực hiện Quy định này đến cán bộ, giảng viên và sinh viên của Trường.\n- Trong quá trình triển khai thực hiện, nếu có vấn đề chưa phù hợp, các đơn vị đề xuất với Nhà trường (phòng Đào tạo) để điều chỉnh, bổ sung cho phù hợp.\n* Lưu ý: Đơn xin miễn học phần TACB trên đường dẫn: https://utt.edu.vn/ct-sv/noi-quy-quy-che/quy-dinh-ve-mien-hoc-phan-tieng-anh-co-ban-va-quy-doi-diem-doi-voi-sinh-vien-dai-hoc-he-chinh-quy-a14213.html', '2023-06-18 16:21:41', '2023-06-18 16:21:41'),
(26, 1, '25bed494390d7dd', 'Cho toi thong tin diem san nam 2022', 'Điểm trúng tuyển đại học hệ chính quy năm 2022 theo phương thức xét tuyển bằng kêt quả thi THPT\n\nHội đồng tuyển sinh Trường Đại học Công nghệ Giao thông vận tải thông báo điểm trúng tuyển đại học hệ chính quy năm 2022 xét theo phương thức xét tuyển bằng kết quả thi THPT\n\nLưu ý: Đây sẽ là thông tin theo thứ tự (Mã xét tuyển - Tên chuyên ngành - Điểm trúng tuyển - Tiêu chí phụ (Theo TTNV)) \n* GTADCLG2 - Logistics và quản lý chuỗi cung ứng - 25.35 - TTNV<=2\n* GTADCTD2 - Thương mại điện tử - 25.35 - TTNV<=6\n* GTADCQM2 - Quản trị Marketing - 24.3 - TTNV<=2\n* GTADCQT2 - Quản trị doanh nghiệp - 23.65 - TTNV<=4\n* GTADCVL2 - Logistics và vận tài đa phương thức - 23.3 - TTNV<=3\n* GTADCLH2 - Logistics và hạ tầng giao thông - 19\n* GTADCTN2 - Tài chính doanh nghiệp - 23.55 - TTNV<=8\n* GTADCKT2 - Kế toán doanh nghiệp - 23.5 - TTNV<=3\n* GTADCTT2 - Công nghệ thông tin - 25.3 - TTNV<=7\n* GTADCHT2 - Hệ thống thông tin - 24.4 - TTNV<=6\n* GTADCTG2 - Trí tuệ nhân tạo và giao thông thông minh - 19\n* GTADCTM2 - Mạng máy tính và truyền thông dữ liệu - 24.05 - TTNV<=3\n* GTADCDT2 - Công nghệ kỹ thuật Điện tử - viễn thông - 23.8 - TTNV<=4\n* GTADCCN2 - Công nghệ kỹ thuật cơ điện tử - 23.5 - TTNV<=2\n* GTADCOT2 - Công nghệ kỹ thuật Ô tô - 23.75 - TTNV=1\n* GTADCCM2 - Công nghệ chế tạo máy - 22.05 - TTNV=1\n* GTADCDM2 - CNKT Đầu máy -  toa xe và tàu điện Metro - 21.65 - TTNV=1\n* GTADCCO2 - Công nghệ kỹ thuật cơ điện tử trên ô tô - 21.25 - TTNV<=3\n* GTADCMX2 - Công nghệ kỹ thuật Máy xây dựng - 16.95 - TTNV=1\n* GTADCMT2 - Công nghệ kỹ thuật Tàu thủy và thiết bị nổi - 16.3 - TTNV<=3\n* GTADCKX2 - Kinh tế xây dựng - 22.75 - TTNV<=6\n* GTADCQX2 - Quản lý xây dựng - 16.75 - TTNV<=5\n* GTADCCD2 - Công nghệ kỹ thuật XD Cầu đường bộ - 16\n* GTADCCH2 - Hạ tầng giao thông đô thị thông minh - 16\n* GTADCDD2 - Công nghệ kỹ thuật XDCT DD&CN - 16\n* GTADCMN2 - Công nghệ và quản lý môi trường - 16\n* GTADCLG1 - Logistics và quản lý chuỗi cung ứng (học tại Vĩnh Phúc) - 22.5 - TTNV<=7\n* GTADCDT1 - CNKT Điện tử - viễn thông (học tại Vĩnh Phúc) - 20.95 - TTNV=1\n* GTADCKT1 - Kế toán doanh nghiệp (học tại Vĩnh Phúc) - 20\n* GTADCOT1 - Công nghệ kỹ thuật Ô tô (học tại Vĩnh Phúc) - 20\n* GTADCTT1 - Công nghệ thông tin (học tại Vĩnh Phúc) - 20\n* GTADCCM1 - Công nghệ chế tạo máy (học tại Vĩnh Phúc) - 17.8 - TTNV<=4\n* GTADCKX1 - Kinh tế xây dựng (học tại Vĩnh Phúc) - 17.65 - TTNV<=4\n* GTADCDD1 - Công nghệ kỹ thuật XDCT DD&CN (học tại Vĩnh Phúc) - 16\n* GTADCCD1 - Công nghệ kỹ thuật XD Cầu đường bộ (học tại Vĩnh Phúc) - 16\n* GTADCOT3 - Công nghệ kỹ thuật Ô tô (học tại Thái Nguyên) - 17.55 - TTNV=1\n* GTADCCD3 - CNKT XD Cầu đường bộ (học tại Thái Nguyên) - 16\n\nQuy định về điểm trúng tuyển (ĐTT):\n\n* ĐTT = Điểm môn 1 + Điểm môn 2 + Điểm môn 3 + Điểm ưu tiên khu vực (nếu có) + Điểm ưu tiên đối tượng (nếu có)\n\n* Điểm trúng tuyển áp dụng cho tất các tổ hợp môn xét tuyển.\n\n* Tiêu chí phụ: trong trường hợp số thí sinh đạt điểm trúng tuyển vượt quá chỉ tiêu ngành, các thí sinh có kết quả bằng điểm xét tuyển ở cuối danh sách sẽ được xét trúng tuyển theo điều kiện ưu tiên thí sinh có thứ tự nguyện vọng ưu tiên cao hơn.\n\n          Thí sinh tra cứu kết quả trúng tuyển tại địa chỉ http://diemthi.utt.edu.vn hoặc http://kqmb.hust.edu.vn/\n\n          Những thí sinh đăng ký xét tuyển theo phương thức khác (xét tuyển sớm) chỉ cần tra cứu kết quả trúng tuyển tại địa chỉ http://kqmb.hust.edu.vn/\n\n          Thời gian xác nhận nhập học, thủ tục nhập học, lịch học…thí sinh theo dõi tại các thông báo tiếp theo.\n\nChi tiết xin liên hệ: Văn phòng Tuyển sinh – Trường Đại học Công nghệ GTVT, số 54 Triều Khúc, Thanh Xuân, Hà Nội, số điện thoại: 0243.552.6713; 0243.552.6714.', '2023-06-20 16:10:03', '2023-06-20 16:10:03'),
(27, 1, '25bed494390d7dd', 'Mien thi tieng anh nhu the nao', 'Điều 1. Phạm vi và Đối tượng áp dụng\n1. Văn bản này quy định về điều kiện, quy trình, thủ tục miễn học phần Tiếng Anh cơ bản và quy đổi điểm đối với sinh viên dại học hệ chính quy của trường Đại học Công nghệ giao thông vận tải.\n2. Quy định được áp dụng đối với sinh viên K72 (tuyển sinh từ năm 2022) trở về sau.\n3. Quy định này không áp dụng với sinh viên đào tạo văn bằng 2.\nĐiều 2. Điều kiện xét miễn học, miễn thi và quy đổi điểm tương ứng\nSinh viên có một trong các chứng chỉ dưới đây sẽ được miễn học phần Tiếng Anh cơ bản với mức quy đổi điểm tương ứng sau:\n* IELTS (4.5 - 5.0), TOEIC (450 - 595), TOEFL ITP (450 - 499), TOEFL (30 - 45), CAMBRIDGE TESTS (140 - 159), APTIS (B1), PTE (Level 3) sẽ tương ứng điểm tổng kết học phần sẽ quy đổi thành 8 (theo thang điểm 10).\n* IELTS (5.5 - 6.5), TOEIC (600 - 845), TOEFL ITP (500 - 626), TOEFL (46 - 93), CAMBRIDGE TESTS (160 - 179), APTIS (B2), PTE (Level 4) sẽ tương ứng điểm tổng kết học phần sẽ quy đổi thành 9 (theo thang điểm 10).\n* IELTS (7.0 - 9.0), TOEIC (850  - 990), TOEFL ITP (627 - 677), TOEFL (94 - 120), CAMBRIDGE TESTS (180 - 230), APTIS (C1 - C2), PTE (Level 5-6) sẽ tương ứng điểm tổng kết học phần sẽ quy đổi thành 10 (theo thang điểm 10) .\n* Lưu ý:\n(1). Là các chứng chỉ do các đơn vị đủ điều kiện tổ chức thi và cấp chứng chỉ theo quy định hiện hành của Bộ Giáo dục và Đào tạo.\n(2). Là các chứng chỉ được liệt kê trong bảng quy đổi.\nĐiều 3. Thủ tục xin miễn học phần\nSinh viên thỏa mãn các điều kiện theo Điều 2, nếu có nhu cầu cần phải nộp về phòng Đào tạo 21 ngày trước khi bắt đầu học kỳ có đăng ký học phần này. Hồ sơ bao gồm: \n- Đơn theo mẫu (phụ lục 1)\n- Bản sao công chứng chứng chỉ ngoại ngữ, (Lưu ý: Khi nộp, sinh viên cần tình bản gốc điểm kiểm tra, đối chiếu và phải có hiệu lực trong thời điểm xét miễn học).\nĐiều 4. Quy trình\n1. Tập hợp đơn, lập d/s sinh viên miễn học: Trong thời hạn 21 ngày trước khi bắt đầu học kỳ (đơn vị phụ trách: phòng Đào tạo).\n2. Thẩm định hồ sơ, chứng chỉ: Trong thời hạn 15 ngày trước khi bắt đầu học kỳ (đơn vị phụ trách: phòng Đào tạo).\n3. Tổng hợp kết quả, trình Hội đồng với sinh viên hợp lệ: Trong thời hạn 15 ngày trước khi bắt đầu học kỳ (đơn vị phụ trách: phòng Đào tạo).\n4. Tổ chức xét miễn học phần và trình Hiệu trưởng công nhận miễn học phần: Trong thời hạn 10 ngày trước khi bắt đầu học kỳ (đơn vị phụ trách: Hội đồng Xét miễn HP TACB và quy đổi điểm).\n5. Ra quyết định miễn học phần: Trong thời hạn 7 ngày trước khi bắt đầu học kỳ (đơn vị phụ trách: Hiệu trưởng).\nĐiều 5. Tổ chức thực hiện\n- Phòng Đào tạo chủ trì, phối hợp với các đơn vị liên quan hướng dẫn và triển khai thực hiện Quy định này đến cán bộ, giảng viên và sinh viên của Trường.\n- Trong quá trình triển khai thực hiện, nếu có vấn đề chưa phù hợp, các đơn vị đề xuất với Nhà trường (phòng Đào tạo) để điều chỉnh, bổ sung cho phù hợp.\n* Lưu ý: Đơn xin miễn học phần TACB trên đường dẫn: https://utt.edu.vn/ct-sv/noi-quy-quy-che/quy-dinh-ve-mien-hoc-phan-tieng-anh-co-ban-va-quy-doi-diem-doi-voi-sinh-vien-dai-hoc-he-chinh-quy-a14213.html', '2023-06-20 16:10:28', '2023-06-20 16:10:28'),
(28, 1, '25bed494390d7dd', '<i class=\"fa-solid fa-thumbs-up fs-12\"></i>', 'Cảm ơn bạn vì đã thích câu nói vừa rồi!', '2023-06-20 16:10:38', '2023-06-20 16:10:38'),
(29, 1, 'c05cfb920e67ac8', 'Cho toi thong tin mien thi tieng anh', 'Điều 1. Phạm vi và Đối tượng áp dụng\n1. Văn bản này quy định về điều kiện, quy trình, thủ tục miễn học phần Tiếng Anh cơ bản và quy đổi điểm đối với sinh viên dại học hệ chính quy của trường Đại học Công nghệ giao thông vận tải.\n2. Quy định được áp dụng đối với sinh viên K72 (tuyển sinh từ năm 2022) trở về sau.\n3. Quy định này không áp dụng với sinh viên đào tạo văn bằng 2.\nĐiều 2. Điều kiện xét miễn học, miễn thi và quy đổi điểm tương ứng\nSinh viên có một trong các chứng chỉ dưới đây sẽ được miễn học phần Tiếng Anh cơ bản với mức quy đổi điểm tương ứng sau:\n* IELTS (4.5 - 5.0), TOEIC (450 - 595), TOEFL ITP (450 - 499), TOEFL (30 - 45), CAMBRIDGE TESTS (140 - 159), APTIS (B1), PTE (Level 3) sẽ tương ứng điểm tổng kết học phần sẽ quy đổi thành 8 (theo thang điểm 10).\n* IELTS (5.5 - 6.5), TOEIC (600 - 845), TOEFL ITP (500 - 626), TOEFL (46 - 93), CAMBRIDGE TESTS (160 - 179), APTIS (B2), PTE (Level 4) sẽ tương ứng điểm tổng kết học phần sẽ quy đổi thành 9 (theo thang điểm 10).\n* IELTS (7.0 - 9.0), TOEIC (850  - 990), TOEFL ITP (627 - 677), TOEFL (94 - 120), CAMBRIDGE TESTS (180 - 230), APTIS (C1 - C2), PTE (Level 5-6) sẽ tương ứng điểm tổng kết học phần sẽ quy đổi thành 10 (theo thang điểm 10) .\n* Lưu ý:\n(1). Là các chứng chỉ do các đơn vị đủ điều kiện tổ chức thi và cấp chứng chỉ theo quy định hiện hành của Bộ Giáo dục và Đào tạo.\n(2). Là các chứng chỉ được liệt kê trong bảng quy đổi.\nĐiều 3. Thủ tục xin miễn học phần\nSinh viên thỏa mãn các điều kiện theo Điều 2, nếu có nhu cầu cần phải nộp về phòng Đào tạo 21 ngày trước khi bắt đầu học kỳ có đăng ký học phần này. Hồ sơ bao gồm: \n- Đơn theo mẫu (phụ lục 1)\n- Bản sao công chứng chứng chỉ ngoại ngữ, (Lưu ý: Khi nộp, sinh viên cần tình bản gốc điểm kiểm tra, đối chiếu và phải có hiệu lực trong thời điểm xét miễn học).\nĐiều 4. Quy trình\n1. Tập hợp đơn, lập d/s sinh viên miễn học: Trong thời hạn 21 ngày trước khi bắt đầu học kỳ (đơn vị phụ trách: phòng Đào tạo).\n2. Thẩm định hồ sơ, chứng chỉ: Trong thời hạn 15 ngày trước khi bắt đầu học kỳ (đơn vị phụ trách: phòng Đào tạo).\n3. Tổng hợp kết quả, trình Hội đồng với sinh viên hợp lệ: Trong thời hạn 15 ngày trước khi bắt đầu học kỳ (đơn vị phụ trách: phòng Đào tạo).\n4. Tổ chức xét miễn học phần và trình Hiệu trưởng công nhận miễn học phần: Trong thời hạn 10 ngày trước khi bắt đầu học kỳ (đơn vị phụ trách: Hội đồng Xét miễn HP TACB và quy đổi điểm).\n5. Ra quyết định miễn học phần: Trong thời hạn 7 ngày trước khi bắt đầu học kỳ (đơn vị phụ trách: Hiệu trưởng).\nĐiều 5. Tổ chức thực hiện\n- Phòng Đào tạo chủ trì, phối hợp với các đơn vị liên quan hướng dẫn và triển khai thực hiện Quy định này đến cán bộ, giảng viên và sinh viên của Trường.\n- Trong quá trình triển khai thực hiện, nếu có vấn đề chưa phù hợp, các đơn vị đề xuất với Nhà trường (phòng Đào tạo) để điều chỉnh, bổ sung cho phù hợp.\n* Lưu ý: Đơn xin miễn học phần TACB trên đường dẫn: https://utt.edu.vn/ct-sv/noi-quy-quy-che/quy-dinh-ve-mien-hoc-phan-tieng-anh-co-ban-va-quy-doi-diem-doi-voi-sinh-vien-dai-hoc-he-chinh-quy-a14213.html', '2023-06-20 16:15:24', '2023-06-20 16:15:24'),
(30, 1, '02cb0f10a49581e', 'Cho toi thong tin mien thi tieng anh', 'Điều 1. Phạm vi và Đối tượng áp dụng\n1. Văn bản này quy định về điều kiện, quy trình, thủ tục miễn học phần Tiếng Anh cơ bản và quy đổi điểm đối với sinh viên dại học hệ chính quy của trường Đại học Công nghệ giao thông vận tải.\n2. Quy định được áp dụng đối với sinh viên K72 (tuyển sinh từ năm 2022) trở về sau.\n3. Quy định này không áp dụng với sinh viên đào tạo văn bằng 2.\nĐiều 2. Điều kiện xét miễn học, miễn thi và quy đổi điểm tương ứng\nSinh viên có một trong các chứng chỉ dưới đây sẽ được miễn học phần Tiếng Anh cơ bản với mức quy đổi điểm tương ứng sau:\n* IELTS (4.5 - 5.0), TOEIC (450 - 595), TOEFL ITP (450 - 499), TOEFL (30 - 45), CAMBRIDGE TESTS (140 - 159), APTIS (B1), PTE (Level 3) sẽ tương ứng điểm tổng kết học phần sẽ quy đổi thành 8 (theo thang điểm 10).\n* IELTS (5.5 - 6.5), TOEIC (600 - 845), TOEFL ITP (500 - 626), TOEFL (46 - 93), CAMBRIDGE TESTS (160 - 179), APTIS (B2), PTE (Level 4) sẽ tương ứng điểm tổng kết học phần sẽ quy đổi thành 9 (theo thang điểm 10).\n* IELTS (7.0 - 9.0), TOEIC (850  - 990), TOEFL ITP (627 - 677), TOEFL (94 - 120), CAMBRIDGE TESTS (180 - 230), APTIS (C1 - C2), PTE (Level 5-6) sẽ tương ứng điểm tổng kết học phần sẽ quy đổi thành 10 (theo thang điểm 10) .\n* Lưu ý:\n(1). Là các chứng chỉ do các đơn vị đủ điều kiện tổ chức thi và cấp chứng chỉ theo quy định hiện hành của Bộ Giáo dục và Đào tạo.\n(2). Là các chứng chỉ được liệt kê trong bảng quy đổi.\nĐiều 3. Thủ tục xin miễn học phần\nSinh viên thỏa mãn các điều kiện theo Điều 2, nếu có nhu cầu cần phải nộp về phòng Đào tạo 21 ngày trước khi bắt đầu học kỳ có đăng ký học phần này. Hồ sơ bao gồm: \n- Đơn theo mẫu (phụ lục 1)\n- Bản sao công chứng chứng chỉ ngoại ngữ, (Lưu ý: Khi nộp, sinh viên cần tình bản gốc điểm kiểm tra, đối chiếu và phải có hiệu lực trong thời điểm xét miễn học).\nĐiều 4. Quy trình\n1. Tập hợp đơn, lập d/s sinh viên miễn học: Trong thời hạn 21 ngày trước khi bắt đầu học kỳ (đơn vị phụ trách: phòng Đào tạo).\n2. Thẩm định hồ sơ, chứng chỉ: Trong thời hạn 15 ngày trước khi bắt đầu học kỳ (đơn vị phụ trách: phòng Đào tạo).\n3. Tổng hợp kết quả, trình Hội đồng với sinh viên hợp lệ: Trong thời hạn 15 ngày trước khi bắt đầu học kỳ (đơn vị phụ trách: phòng Đào tạo).\n4. Tổ chức xét miễn học phần và trình Hiệu trưởng công nhận miễn học phần: Trong thời hạn 10 ngày trước khi bắt đầu học kỳ (đơn vị phụ trách: Hội đồng Xét miễn HP TACB và quy đổi điểm).\n5. Ra quyết định miễn học phần: Trong thời hạn 7 ngày trước khi bắt đầu học kỳ (đơn vị phụ trách: Hiệu trưởng).\nĐiều 5. Tổ chức thực hiện\n- Phòng Đào tạo chủ trì, phối hợp với các đơn vị liên quan hướng dẫn và triển khai thực hiện Quy định này đến cán bộ, giảng viên và sinh viên của Trường.\n- Trong quá trình triển khai thực hiện, nếu có vấn đề chưa phù hợp, các đơn vị đề xuất với Nhà trường (phòng Đào tạo) để điều chỉnh, bổ sung cho phù hợp.\n* Lưu ý: Đơn xin miễn học phần TACB trên đường dẫn: https://utt.edu.vn/ct-sv/noi-quy-quy-che/quy-dinh-ve-mien-hoc-phan-tieng-anh-co-ban-va-quy-doi-diem-doi-voi-sinh-vien-dai-hoc-he-chinh-quy-a14213.html', '2023-06-20 16:17:35', '2023-06-20 16:17:35'),
(31, 5, '75f5cf3c7130277', 'Thông tin về trương UTT', 'Trường Đại học Công nghệ Giao thông Vận tải (tên tiếng Anh: University Of Transport Technology, tên viết tắt: UTT) là trường Đại học công lập được nâng cấp năm 2011 từ Trường Cao đẳng giao thông vận tải- trực thuộc Bộ Giao thông Vận tải[1]. Tiền thân là trường Cao đẳng Công chính, được thành lập ngày 15/11/1945. Trường đào tạo đa ngành, đa lĩnh vực về công nghệ kỹ thuật giao thông, công nghệ kỹ thuật cơ khí, ô tô, kinh tế, vận tải, logistics, công nghệ thông tin, điện tử viễn thông, môi trường... theo định hướng ứng dụng phục vụ ngành GTVT và các ngành kinh tế quốc dân. Năm 2016, Trường được Thủ tướng Chính phủ quy hoạch phát triển thành trường đại học trọng điểm Quốc gia; năm 2017 trường là 1 trong 15 trường đại học đầu tiên của Việt Nam được công nhận đạt tiêu chuẩn chất lượng giáo dục đại học.', '2023-07-08 10:01:30', '2023-07-08 10:01:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_14_155341_create_question', 1),
(8, '2023_04_03_032351_create_answer', 2),
(9, '2023_04_12_041629_create_history_message', 3),
(10, '2023_04_12_083552_create_room', 4),
(11, '2023_04_24_073706_create_customer', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `question`
--

CREATE TABLE `question` (
  `id_question` int(10) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `question`
--

INSERT INTO `question` (`id_question`, `question`, `created_at`, `updated_at`) VALUES
(6, 'noi quy', '2023-06-13 03:11:42', '2023-06-13 03:11:42'),
(7, 'dai hoc cong nghe giao thong van tai', '2023-06-13 03:32:17', '2023-06-13 03:32:17'),
(8, 'utt', '2023-06-13 03:32:30', '2023-06-13 03:32:30'),
(10, 'tuyen sinh', '2023-06-13 04:06:20', '2023-06-13 04:06:20'),
(11, 'giang vien', '2023-06-13 04:06:44', '2023-06-13 04:06:44'),
(12, 'diem', '2023-06-13 04:06:56', '2023-06-13 04:06:56'),
(13, 'quy dinh', '2023-06-13 04:09:24', '2023-06-13 04:09:24'),
(17, 'thi tieng anh', '2023-06-13 04:50:44', '2023-06-18 03:45:09'),
(18, 'danh gia', '2023-06-13 04:50:50', '2023-06-13 04:50:50'),
(20, 'mien thi tieng anh', '2023-06-13 04:57:38', '2023-06-13 04:57:38'),
(21, 'mien thi ngoai ngu', '2023-06-13 04:57:47', '2023-06-13 04:57:47'),
(22, 'mien tieng anh', '2023-06-13 04:57:54', '2023-06-13 04:57:54'),
(23, 'mien ngoai ngu', '2023-06-13 04:58:00', '2023-06-13 04:58:00'),
(24, 'thi ngoai ngu', '2023-06-13 04:58:07', '2023-06-13 04:58:07'),
(25, 'noi bo', '2023-06-18 03:45:34', '2023-06-18 03:45:34'),
(27, 'xet tuyen', '2023-06-18 05:51:24', '2023-06-18 05:51:24'),
(28, 'dang ky', '2023-06-18 05:51:30', '2023-06-18 05:51:30'),
(29, '2023', '2023-06-18 05:53:10', '2023-06-18 05:53:10'),
(30, 'he chinh quy', '2023-06-18 06:02:12', '2023-06-18 06:02:12'),
(31, 'thong bao', '2023-06-18 06:02:18', '2023-06-18 06:02:18'),
(32, 'diem trung tuyen', '2023-06-18 16:23:41', '2023-06-18 16:23:41'),
(33, 'diem dau vao', '2023-06-18 16:23:48', '2023-06-18 16:23:48'),
(34, '2022', '2023-06-18 16:23:59', '2023-06-18 16:23:59'),
(35, 'diem san', '2023-06-18 16:24:12', '2023-06-18 16:24:12'),
(36, 'ket qua', '2023-06-18 16:24:26', '2023-06-18 16:24:26'),
(42, 'truong', '2023-06-21 15:02:18', '2023-06-21 15:02:18'),
(53, 'thong tin', '2023-07-08 10:10:56', '2023-07-08 10:10:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room`
--

CREATE TABLE `room` (
  `id_room` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `code_history` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_room` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `room`
--

INSERT INTO `room` (`id_room`, `id_user`, `code_history`, `name_room`, `created_at`, `updated_at`) VALUES
(1, 1, '763fceb3c3780ed', '', '2023-03-25 01:41:52', '2023-04-12 01:41:52'),
(2, 1, '9cf18671f6c7e5f', 'UTT', '2023-02-24 02:18:54', '2023-05-26 00:37:33'),
(3, 1, '8d4dd827d46bfa5', 'UTT', '2022-04-24 02:26:49', '2023-05-26 00:36:35'),
(4, 1, '2a74e95a17adbce', '', '2023-04-24 02:27:56', '2023-04-24 02:27:56'),
(5, 1, 'cc156de965ce533', '', '2023-04-24 02:29:03', '2023-04-24 02:29:03'),
(6, 1, '74d07c42f945f62', '', '2023-04-24 02:42:50', '2023-04-24 02:42:50'),
(7, 1, 'fd2b3ed63600514', '', '2023-04-24 02:46:25', '2023-04-24 02:46:25'),
(8, 1, 'c0b60a18b8e3e8b', 'UTT', '2023-04-24 02:47:31', '2023-04-24 02:47:37'),
(9, 1, '289c873c6d5d89a', '', '2023-04-25 01:35:53', '2023-04-25 01:35:53'),
(10, 1, '286180cefea11e4', '', '2023-05-16 02:05:42', '2023-05-16 02:05:42'),
(11, 1, 'a330cf329a00856', '', '2023-05-16 02:22:21', '2023-05-16 02:22:21'),
(12, 1, '8e69ce1c672725e', '', '2023-05-16 02:30:13', '2023-05-16 02:30:13'),
(13, 1, '70fbd9734f7ccb0', '', '2023-05-16 02:31:13', '2023-05-16 02:31:13'),
(20, 1, '69ca51d752bd6c8', '', '2023-05-23 03:51:51', '2023-05-23 03:51:51'),
(21, 1, '8e36df5420b7ab3', '', '2023-05-23 03:59:50', '2023-05-23 03:59:50'),
(22, 1, 'a68c041aaef8f2a', '', '2023-05-23 04:00:29', '2023-05-23 04:00:29'),
(23, 1, 'ce52091a141407a', 'UTT', '2023-05-23 04:01:25', '2023-05-23 04:30:29'),
(24, 1, '828260353ec7f30', 'UTT', '2023-05-23 04:08:33', '2023-05-23 04:29:33'),
(25, 1, 'f83cb8088f9a583', 'UT', '2023-05-23 04:08:44', '2023-05-23 04:28:24'),
(26, 1, 'd9a915ea274497d', 'UTT', '2023-05-23 04:11:49', '2023-05-23 04:26:02'),
(27, 1, '3eb2aa58ccf7781', 'U', '2023-05-23 04:12:23', '2023-05-23 04:23:30'),
(28, 1, '25bed494390d7dd', 'UTT', '2023-05-23 04:14:18', '2023-05-23 04:14:21'),
(29, 4, 'f176fcae71f00fe', 'UTT', '2023-05-26 09:46:36', '2023-05-26 09:46:46'),
(30, 1, 'c05cfb920e67ac8', 'Cho toi thong tin mien thi tieng anh', '2023-06-20 16:10:12', '2023-06-20 16:15:24'),
(31, 1, 'db293250d386c40', '', '2023-06-20 16:15:32', '2023-06-20 16:15:32'),
(32, 1, '67ddd980458ea8f', '', '2023-06-20 16:16:59', '2023-06-20 16:16:59'),
(33, 1, '02cb0f10a49581e', 'Cho toi thong tin mien thi tieng anh', '2023-06-20 16:17:32', '2023-06-20 16:17:35'),
(34, 5, '59838e010759064', '', '2023-07-08 09:51:22', '2023-07-08 09:51:22'),
(35, 5, '75f5cf3c7130277', 'Thông tin về trương UTT', '2023-07-08 10:01:20', '2023-07-08 10:01:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Bảo Sơn', 'son', 'toilaone12@gmail.com', NULL, '69b21e9c5b38d7c34449a5b290363487', '123456', '2023-06-22 07:50:11', '2023-06-23 08:49:37');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id_answer`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `history_message`
--
ALTER TABLE `history_message`
  ADD PRIMARY KEY (`id_history`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id_question`);

--
-- Chỉ mục cho bảng `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id_room`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `answer`
--
ALTER TABLE `answer`
  MODIFY `id_answer` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `history_message`
--
ALTER TABLE `history_message`
  MODIFY `id_history` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `question`
--
ALTER TABLE `question`
  MODIFY `id_question` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `room`
--
ALTER TABLE `room`
  MODIFY `id_room` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
